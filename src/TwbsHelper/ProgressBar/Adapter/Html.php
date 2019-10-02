<?php

namespace TwbsHelper\ProgressBar\Adapter;

/**
 * TwbsHelper\ProgressBar\Adapter\Html offers a simple method for rendering a
 * progressbar in a browser.
 */
class Html extends \Zend\ProgressBar\Adapter\AbstractAdapter
{
    use \TwbsHelper\View\Helper\StyleAttributeTrait;
    use \TwbsHelper\View\Helper\ClassAttributeTrait;
    use \TwbsHelper\View\Helper\HtmlTrait;

    /**
     * @var \TwbsHelper\View\Helper\ProgressBar
     */
    protected $helper;

    /**
     * Progressbar min value
     *
     * @var int
     */
    protected $min = 0;

    /**
     * Progressbar max value
     *
     * @var int
     */
    protected $max = 100;

    /**
     * Progressbar div attributes
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Progressbar shows label
     */
    protected $showLabel = false;

    /**
     * Progressbar background variant
     *
     * @var string
     */
    protected $variant;

    /**
     * Set progressbar min value
     *
     * @param int $iMin
     * @return \TwbsHelper\ProgressBar\Adapter\Html
     */
    public function setHelper(\TwbsHelper\View\Helper\ProgressBar $oHelper) : \TwbsHelper\ProgressBar\Adapter\Html
    {
        $this->helper = $oHelper;
        return $this;
    }

    /**
     * Set whether progressbar shows label or not
     *
     * @param bool $bShowLabel
     * @return \TwbsHelper\ProgressBar\Adapter\Html
     */
    public function setShowLabel(bool $bShowLabel)
    {
        $this->showLabel = $bShowLabel;
        return $this;
    }

    /**
     * Set progressbar min value
     *
     * @param int $iMin
     * @return \TwbsHelper\ProgressBar\Adapter\Html
     */
    public function setMin(int $iMin) : \TwbsHelper\ProgressBar\Adapter\Html
    {
        $this->min = $iMin;
        return $this;
    }

    /**
     * Set progressbar max value
     *
     * @param int $iMax
     * @return \TwbsHelper\ProgressBar\Adapter\Html
     */
    public function setMax(int $iMax) : \TwbsHelper\ProgressBar\Adapter\Html
    {
        $this->max = $iMax;
        return $this;
    }

    /**
     * Set progressbar attributes
     *
     * @param array $aAttributes
     * @return \TwbsHelper\ProgressBar\Adapter\Html
     */
    public function setAttributes(array $aAttributes) : \TwbsHelper\ProgressBar\Adapter\Html
    {
        $this->attributes = $aAttributes;
        return $this;
    }

    /**
     * Set progressbar background variant
     *
     * @param string $sVariant
     * @return \TwbsHelper\ProgressBar\Adapter\Html
     */
    public function setVariant(string $sVariant) : \TwbsHelper\ProgressBar\Adapter\Html
    {
        $this->variant = $sVariant;
        return $this;
    }

    /**
     * Defined by Zend\ProgressBar\Adapter\AbstractAdapter
     *
     * @param  float   $iCurrent       Current progress value
     * @param  float   $iMax           Max progress value
     * @param  float   $iPercent       Current percent value
     * @param  int $iTimeTaken     Taken time in seconds
     * @param  int $iTimeRemaining Remaining time in seconds
     * @param  string  $sText          Status text
     * @return void
     */
    public function notify(
        $iCurrent,
        $iMax,
        $iPercent,
        $iTimeTaken,
        $iTimeRemaining,
        $sText
    ) {
        $this->outputData($iCurrent, $iPercent);
    }

    /**
     * Defined by Zend\ProgressBar\Adapter\AbstractAdapter
     *
     * @return void
     */
    public function finish()
    {
        $this->outputData($this->max, 1);
    }

    /**
     * Outputs given data the user agent.
     *
     * This split-off is required for unit-testing.
     *
     * @param  string $data
     * @return void
     */
    protected function outputData(int $iCurrent, $iPercent)
    {
        $aDefaultAttributes = [
            'role' => 'progressbar',
            'aria-valuenow' => $iCurrent,
            'aria-valuemin' => $this->min,
            'aria-valuemax' => $this->max,
        ];

        $sPercent = ($iPercent*100).'%';

        $aProgressBarClasses = ['progress-bar'];
        if ($this->variant) {
            $aProgressBarClasses[] = $this->getVariantClass($this->variant, 'bg');
        }

        echo $this->helper->htmlElement(
            'div',
            ['class' => 'progress'],
            $this->helper->htmlElement(
                'div',
                $this->helper->setStylesToAttributes(
                    $this->helper->setClassesToAttributes(
                        array_merge($aDefaultAttributes, $this->attributes),
                        $aProgressBarClasses
                    ),
                    $iPercent !== false && $iPercent > 0 ? ['width' => $sPercent] : []
                ),
                $this->showLabel ? $sPercent : ''
            )
        ) . PHP_EOL;
    }
}
