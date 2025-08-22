import { useState, useEffect } from "react";

function App() {
  const [codes, setCodes] = useState([]);
  const [selectedFile, setSelectedFile] = useState(null);
  const [output, setOutput] = useState("");

  useEffect(() => {
    fetch("http://localhost/file/project/php-codes/backend/getCode.php")
      .then(res => res.json())
      .then(data => setCodes(data.codes));
  }, []);

  const runCode = (file) => {
    fetch(`http://localhost/file/project/php-codes/backend/runCode.php?file=${file}`)
      .then(res => res.json())
      .then(data => setOutput(data.output));
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

      <div style={{ width: "40%" }}>
        <h2>Selected Code</h2>
        {selectedFile && (
          <pre style={boxStyle}>
            {codes.find(c => c.name === selectedFile)?.content}
          </pre>
        )}
      </div>

      <div style={{ width: "40%" }}>
        <h2>Output</h2>
        <pre style={outputStyle}>
          {output}
        </pre>
      </div>
    </div>
  );
}

export default App;
