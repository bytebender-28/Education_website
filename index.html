<!DOCTYPE html>
<html>
<head>
  <title>Student Chatbot</title>
  <style>
    body { font-family: Arial, sans-serif; background: #000000ff; }
    #chatbox { width: 400px; height: 400px; border: 1px solid #ccc; background-color: #6b6b6bff; overflow-y: auto; margin: 20px auto; padding: 10px; }
    .user { color: white; margin: 5px 0; }
    .bot { color: white; margin: 5px 0; }
    #input { width: 300px; padding: 10px; }
    #send { padding: 10px; }
  </style>
</head>
<body>
  <h2 style="text-align:center; color:white;" >Student Q&A Chatbot</h2>
  <div id="chatbox"></div>
  <div style="text-align:center;">
    <input type="text" id="input" placeholder="Ask a question...">
    <button id="send">Send</button>
  </div>
    
  <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script> <!--Markdown parser library-->
  <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script> <!--mathjax library for mathematical formula parsing-->

  <script > 
    const chatbox = document.getElementById("chatbox");
    const input = document.getElementById("input");
    const sendBtn = document.getElementById("send");

    function addMessage(text, sender) {
      const msg = document.createElement("div");
      msg.className = sender;
      const senderSpan = `<span style="font-weight:bold">${sender.toUpperCase()}:</span> `;

      text = marked.parse(text);
      msg.innerHTML = senderSpan + ": " + text ;
      chatbox.appendChild(msg);
      MathJax.typesetPromise([msg]);
      chatbox.scrollTop = chatbox.scrollHeight;
      
    }

    sendBtn.onclick = async function() {
      const question = input.value.trim();
      if (!question) return;
      addMessage(question, "user");
      input.value = "";

      // Send to backend
      const response = await fetch("chatbot.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "message=" + encodeURIComponent(question)
      });
      const data = await response.json();
      addMessage(data.reply, "bot");
    }
  </script>
</body>
</html>
