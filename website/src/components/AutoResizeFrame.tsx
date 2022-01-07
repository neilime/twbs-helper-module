import React, { useRef, useState } from "react";
import { FunctionComponent } from "react";

const AutoResizeFrame: FunctionComponent<{ srcDoc: string }> = ({ srcDoc }) => {
  const ref = useRef<HTMLIFrameElement>();
  const [height, setHeight] = useState("100px");
  const onLoad = () => {
    setHeight(ref?.current?.contentWindow.document.body.scrollHeight + "px");
  };

  const id = "iframe_" + Math.random().toString(36).slice(2, 9);

  return (
    <iframe
      ref={ref}
      onLoad={onLoad}
      id={id}
      srcDoc={srcDoc}
      width="100%"
      height={height}
      scrolling="no"
      frameBorder="0"
      style={{
        maxWidth: "100%",
        width: "100%",
        overflow: "auto",
      }}
    ></iframe>
  );
};

export default AutoResizeFrame;
