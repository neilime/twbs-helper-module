<?php
namespace TwbsHelper\Form\View\Helper;

use DomainException;
use LogicException;
use Exception;
use Zend\Form\LabelAwareInterface;
use Zend\Form\View\Helper\FormButton as ZendFormButtonViewHelper;
use Zend\Form\ElementInterface;


/**
 * FormButton 
 * 
 * @uses ZendFormButtonViewHelper
 */
class FormButton extends ZendFormButtonViewHelper
{
    const ICON_PREPEND = 'prepend';
    const ICON_APPEND  = 'append';

    // @var string
    protected static $sDropdownContainerFormat = '<div class="btn-group %s">%s</div>';

    // @var string
    protected static $sDropdownToggleFormat = '%s <b class="caret"></b>';

    // @var string
    protected static $sDropdownCaretFormat = '<button type="button" class="dropdown-toggle %s" data-toggle="dropdown"><span class="caret"></span></button>';

    // Allowed button options
    // @var array
    protected static $aButtonOptions = [
        'danger',
        'dark', // Added in BS4
        'info',
        'light', // Added in BS4
        'link',
        'primary',
        'secondary', // BS4 Renamed .btn-default to .btn-secondary
        'success',
        'warning',
    ];


    /**
     * render 
     * 
     * @see    FormButton::render()
     * @param  ElementInterface $oElement
     * @param  string $sButtonContent
     * @throws LogicException
     * @throws Exception
     * @return string
     */
    public function render(ElementInterface $oElement, $sButtonContent = null)
    {
        // Set classes assigned via attribute
        if ($sClass = $oElement->getAttribute('class')) {
            if (!preg_match('/(\s|^)btn(\s|$)/', $sClass)) {
                $sClass .= ' btn';
            }

            if (!preg_match('/(\s|^)btn-.*(\s|$)/', $sClass)) {
                $sClass .= ' btn-secondary';

            } else {
                $bHasOption = false;

                foreach (static::$aButtonOptions as $sButtonOption) {
                    if (preg_match('/(\s|^)btn-' . $sButtonOption . '.*(\s|$)/', $sClass)) {
                        $bHasOption = true;
                        break;
                    }
                }

                if (!$bHasOption) {
                    $sClass .= ' btn-secondary';
                }
            }
            $oElement->setAttribute('class', trim($sClass));

        // Set default classes since none were assigned
        } else {
            $oElement->setAttribute('class', 'btn btn-secondary');
        }

        // Retrieve icon options
        if (null !== ($aIconOptions = $oElement->getOption('glyphicon'))) {
            $sIconHelperMethod = 'glyphicon';

        } elseif (null !== ($aIconOptions = $oElement->getOption('fontAwesome'))) {
            $sIconHelperMethod = 'fontAwesome';
        }

        // Define button content
        if (null === $sButtonContent) {
            $sButtonContent = $oElement->getLabel();

            if (!$sButtonContent) {
                $sButtonContent = $oElement->getValue();
            }

            if (null === $sButtonContent && !$aIconOptions) {
                throw new DomainException(sprintf(
                    '%s expects either button content as the second argument, ' .
                    'or that the element provided has a label value, a glyphicon option, or a fontAwesome option; none found',
                    __METHOD__
                ));
            }

            // Translate button content upon request
            if (null !== ($oTranslator = $this->getTranslator())) {
                $sButtonContent = $oTranslator->translate($sButtonContent, $this->getTranslatorTextDomain());
            }
        }

        if (!$oElement instanceof LabelAwareInterface || !$oElement->getLabelOption('disable_html_escape')) {
            $oEscapeHtmlHelper = $this->getEscapeHtmlHelper();
            $sButtonContent    = $oEscapeHtmlHelper($sButtonContent);
        }

        // Manage icon
        if ($aIconOptions) {
            // Set default icon options if scalar provided
            if (is_scalar($aIconOptions)) {
                $aIconOptions = [
                    'icon'     => $aIconOptions,
                    'position' => self::ICON_PREPEND
                ];
            }

            // Validate icon options type
            if (!is_array($aIconOptions)) {
                throw new LogicException(sprintf(
                    '"glyphicon" and "fontAwesome" button option expects a scalar value or an array, "%s" given',
                    is_object($aIconOptions) ? get_class($aIconOptions) : gettype($aIconOptions)
                ));
            }

            $position = 'prepend';

            // Set icon position
            if (!empty($aIconOptions['position'])) {
                $position = $aIconOptions['position'];
            }

            // Set icon
            if (!empty($aIconOptions['icon'])) {
                $icon = $aIconOptions['icon'];
            }

            // Validate icon option type
            if (!is_scalar($icon)) {
                throw new LogicException(sprintf(
                    'Glyphicon and fontAwesome "icon" option expects a scalar value, "%s" given',
                    is_object($icon) ? get_class($icon) : gettype($icon)
                ));

            // Validate icon position option type
            } elseif (!is_string($position)) {
                throw new LogicException(sprintf(
                    'Glyphicon and fontAwesome "position" option expects a string, "%s" given',
                    is_object($position) ? get_class($position) : gettype($position)
                ));

            // Validate icon position option value
            } elseif ($position !== self::ICON_PREPEND && $position !== self::ICON_APPEND) {
                throw new LogicException(sprintf(
                    'Glyphicon and fontAwesome "position" option allows "'.self::ICON_PREPEND.'" or "'.self::ICON_APPEND.'", "%s" given',
                    is_object($position) ? get_class($position) : gettype($position)
                ));
            }

            // Button content provided
            if ($sButtonContent) {
                // Prepend icon to button content
                if ($position === self::ICON_PREPEND) {
                    $sButtonContent = $this->getView()->{$sIconHelperMethod}(
                        $icon,
                        isset($aIconOptions['attributes']) ? $aIconOptions['attributes'] : null
                    ) . " {$sButtonContent}";

                // Append icon to button content
                } else {
                    $sButtonContent .= ' ' . $this->getView()->{$sIconHelperMethod}(
                        $icon,
                        isset($aIconOptions['attributes']) ? $aIconOptions['attributes'] : null
                    );
                }

            // No button content provided, set icon as button content
            } else {
                $sButtonContent = $this->getView()->{$sIconHelperMethod}(
                    $icon,
                    isset($aIconOptions['attributes']) ? $aIconOptions['attributes'] : null
                );
            }
        }


        // Dropdown button
        if ($aDropdownOptions = $oElement->getOption('dropdown')) {
            // Validate dropdown option type
            if (!is_array($aDropdownOptions)) {
                throw new LogicException(sprintf(
                    '"dropdown" option expects an array, "%s" given',
                    is_object($aDropdownOptions) ? get_class($aDropdownOptions) : gettype($aDropdownOptions)
                ));
            }

            // Split dropdown button
            if (empty($aDropdownOptions['split'])) {
                // Set class attribute
                if (!preg_match('/(\s|^)dropdown-toggle(\s|$)/', $sClass = $oElement->getAttribute('class'))) {
                    $oElement->setAttribute('class', trim($sClass . ' dropdown-toggle'));
                }

                // Set data-toggle attribute
                $oElement->setAttribute('data-toggle', 'dropdown');

                $sMarkup = $this->openTag($oElement) .
                    sprintf(static::$sDropdownToggleFormat, $sButtonContent) .
                    $this->closeTag();

            // Regular dropdown button
            } else {
                // Add caret element
                $sMarkup = $this->openTag($oElement) .
                    $sButtonContent .
                    $this->closeTag() .
                    sprintf(static::$sDropdownCaretFormat, $oElement->getAttribute('class'));
            }

            // No container
            if ($oElement->getOption('disable-twbs')) {
                return $sMarkup . $this->getView()->dropdown()->renderListItems($aDropdownOptions);
            }

            // Render button + dropdown
            return sprintf(
                static::$sDropdownContainerFormat,
                // Drop way
                empty($aDropdownOptions['dropup']) ? '' : 'dropup',
                $sMarkup .
                $this->getView()->dropdown()->renderListItems($aDropdownOptions)
            );
        }

        return $this->openTag($oElement) . $sButtonContent . $this->closeTag();
    }
}

