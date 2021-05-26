import React, { FunctionComponent, ReactNode } from "react";
import { renderToStaticMarkup } from "react-dom/server";
import AutoResizeFrame from "./AutoResizeFrame";

interface IProps {
  children: ReactNode;
  bootstrapVersion: string;
}

const HtmlCode: FunctionComponent<IProps> = ({
  children,
  bootstrapVersion,
}) => {
  const htmlString = renderToStaticMarkup(children);
  const initialContent = `<!DOCTYPE html>
  <html>
    <head>
      <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@${bootstrapVersion}/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        crossorigin="anonymous"
      />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <link
        href="https://getbootstrap.com/docs/${bootstrapVersion}/assets/css/docs.min.css" 
        rel="stylesheet" 
        crossorigin="anonymous"
      />
      </head>
      <body>
        <div class="bd-example">${htmlString}</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@${bootstrapVersion}/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript">
          var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
          var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
          })
          (function () {
            'use strict'
          
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
          
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
              .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                  if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                  }
          
                  form.classList.add('was-validated')
                }, false)
              })
          })();
        </script>
        <style>
            .bd-example>div>.dropdown-menu {
              position: static;
              display: block;
          }
        </style>
    </body>
  </html>`;

  return <AutoResizeFrame srcDoc={initialContent} />;
};
export default HtmlCode;
