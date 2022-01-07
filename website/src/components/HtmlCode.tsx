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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@${bootstrapVersion}/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript">
          $(function () {
            $('[data-toggle="popover"]').popover();
          })
        </script>
    </body>
  </html>`;

  return <AutoResizeFrame srcDoc={initialContent} />;
};
export default HtmlCode;
