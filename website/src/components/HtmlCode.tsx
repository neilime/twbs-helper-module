import React, { Children, FunctionComponent, ReactNode } from "react";
import { createRef, RefObject, useEffect, useState } from "react";
import Frame from "react-frame-component";

interface IProps {
  children: ReactNode;
  bootstrapVersion: string;
}

interface IFrame {
  node: HTMLIFrameElement;
}

const HtmlCode: FunctionComponent<IProps> = ({
  children,
  bootstrapVersion,
}) => {
  const [height, setHeight] = useState(100);
  const iframeRef: RefObject<IFrame> = createRef();
  const handleResize = (iframe: RefObject<IFrame>) => {
    const doc = iframe?.current?.node?.contentDocument;
    const body_ = doc?.body;
    const html_ = doc?.documentElement;

    const height = Math.max(
      body_?.scrollHeight,
      body_?.offsetHeight,
      html_?.clientHeight,
      html_?.scrollHeight,
      html_?.offsetHeight
    );

    if (height !== 0) {
      setHeight(height);
    }
  };
  useEffect(() => handleResize(iframeRef), [children]);

  const initialContent = `<!DOCTYPE html>
  <html>
    <head>
      <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@${bootstrapVersion}/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        crossorigin="anonymous"
      />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@${bootstrapVersion}/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script type="text/javascript">
        $(function () {
          $('[data-toggle="popover"]').popover();
        })
      </script>
    </head>
    <body><div></div></body>
  </html>`;

  return (
    <Frame
      style={{
        height,
        width: "100%",
      }}
      ref={iframeRef}
      onLoad={() => handleResize(iframeRef)}
      initialContent={initialContent}
    >
      {children}
    </Frame>
  );
};

export default HtmlCode;
