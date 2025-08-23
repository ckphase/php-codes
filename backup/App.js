import { useState, useEffect } from "react";

function App() {
  const [codes, setCodes] = useState([]);
  const [selectedFile, setSelectedFile] = useState(null);
  const [output, setOutput] = useState("");
  const [rawHtml, setRawHtml] = useState("");

  useEffect(() => {
    fetch("http://localhost/file/php-codes/backend/getCode.php")
      .then(res => res.json())
      .then(data => setCodes(data.codes));
  }, []);

  const runCode = (file) => {
    fetch(`http://localhost/file/php-codes/backend/runCode.php?file=${file}`)
      .then(res => res.json())
      .then(data => {
        setOutput(data.output || "");
        setRawHtml(data.raw_html || "");
      });
    setSelectedFile(file);
  };

  const boxStyle = {
    background: "#eee",
    padding: "10px",
    whiteSpace: "pre-wrap",
    wordWrap: "break-word",
    overflowX: "auto",
    overflowY: "auto",
    maxHeight: "400px",
    borderRadius: "8px"
  };

  const outputStyle = {
    ...boxStyle,
    background: "#222",
    color: "lime"
  };

  return (
    <div style={{ display: "flex", gap: "20px", padding: "20px" }}>
      
      {/* Sidebar with code list */}
      <div style={{ width: "20%" }}>
        <h2>PHP Codes ({codes.length})</h2>
        <ul>
          {codes.map((c, i) => (
            <li
              key={i}
              onClick={() => runCode(c.name)}
              style={{ cursor: "pointer", marginBottom: "5px" }}
            >
              {c.name}
            </li>
          ))}
        </ul>
      </div>

      {/* Selected Code */}
      <div style={{ width: "40%" }}>
        <h2>Selected Code</h2>
        {selectedFile && (
          <pre style={boxStyle}>
            {codes.find(c => c.name === selectedFile)?.content}
          </pre>
        )}
      </div>

      {/* Output & Debug */}
      <div style={{ width: "40%" }}>
        <h2>Output</h2>

        {/* Rendered HTML Preview */}
        {output && (
          <iframe
            title="php-output"
            style={{
              width: "100%",
              height: "200px",
              border: "1px solid #444",
              borderRadius: "8px",
              marginBottom: "10px"
            }}
            srcDoc={output}
          />
        )}

        {/* Raw HTML Debug */}
        <h3 style={{ marginTop: "10px" }}>Raw HTML Debug</h3>
        <pre style={outputStyle}>
          {rawHtml}
        </pre>
      </div>
    </div>
  );
}

export default App;
