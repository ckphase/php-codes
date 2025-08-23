import { useState, useEffect } from "react";
import bgVideo from "./assets/bg.mp4"; // put video in src/assets folder

function App() {
  const [codes, setCodes] = useState([]);
  const [selectedFile, setSelectedFile] = useState(null);
  const [output, setOutput] = useState("");

  useEffect(() => {
    fetch("http://localhost/file/php-codes/backend/getCode.php")
      .then(res => res.json())
      .then(data => setCodes(data.codes));
  }, []);

  const runCode = (file) => {
    fetch(`http://localhost/file/php-codes/backend/runCode.php?file=${file}`)
      .then(res => res.json())
      .then(data => setOutput(data.output || ""));
    setSelectedFile(file);
  };

  const terminalStyle = {
    background: "rgba(0, 20, 0, 0.9)",
    color: "#00ff88",
    padding: "10px",
    whiteSpace: "pre-wrap",
    wordWrap: "break-word",
    overflowX: "auto",
    overflowY: "auto",
    maxHeight: "400px",
    borderRadius: "8px",
    fontFamily: "monospace",
    fontSize: "14px",
    border: "1px solid #00ff88",
    boxShadow: "0 0 10px #00ff88 inset"
  };

  return (
    <div style={{ position: "relative", minHeight: "100vh", overflow: "hidden" }}>
      
      {/* Background Video */}
      <video
        autoPlay
        loop
        muted
        playsInline
        style={{
          position: "fixed",
          top: 0,
          left: 0,
          width: "100%",
          height: "100%",
          objectFit: "cover",
          zIndex: -1,
          filter: "brightness(0.6) contrast(1.2)"
        }}
      >
        <source src={bgVideo} type="video/mp4" />
      </video>

      {/* Foreground App */}
      <div style={{ display: "flex", gap: "20px", padding: "20px", color: "#00ff88" }}>
        
        {/* Sidebar */}
        <div style={{ width: "20%" }}>
          <h2>PHP Codes ({codes.length})</h2>
          <ul style={{ listStyle: "none", padding: 0 }}>
            {codes.map((c, i) => (
              <li
                key={i}
                onClick={() => runCode(c.name)}
                style={{ cursor: "pointer", marginBottom: "5px", fontFamily: "monospace" }}
              >
                ▶ {c.name}
              </li>
            ))}
          </ul>
        </div>

        {/* Selected Code */}
        <div style={{ width: "40%" }}>
          <h2>Selected Code</h2>
          {selectedFile && (
            <pre style={terminalStyle}>
              {codes.find(c => c.name === selectedFile)?.content}
            </pre>
          )}
        </div>

        {/* Output */}
        <div style={{ width: "40%" }}>
          <h2>Output</h2>
          {output && (
            <div style={{ ...terminalStyle, marginBottom: "10px" }}>
              <iframe
                title="php-output"
                style={{
                  width: "100%",
                  height: "200px",
                  border: "none",
                  background: "white",
                  color: "white"
                }}
                srcDoc={output}
              />
            </div>
          )}

          {/* Hacker Console */}
          <div style={{
            ...terminalStyle,
            maxHeight: "300px",
            overflowY: "auto"
          }}>
            <p>&gt; Total Programs Loaded: {codes.length}</p>
            {selectedFile && (
              <>
                <p>&gt; Running: {selectedFile}</p>
                <p>&gt; Lines of Code: {
                  codes.find(c => c.name === selectedFile)?.content.split("\n").length
                }</p>
                <p>&gt; Status: {output ? "Success" : "Waiting..."}</p>
              </>
            )}
            <p>&gt; Last Output Size: {output.length} chars</p>
            <p>&gt; Connection: OK</p>
            <p>&gt; User: root@react</p>
          </div>
        </div>
      </div>
    </div>
  );
}

export default App;
