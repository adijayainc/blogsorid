curl https://api.groq.com/openai/v1/chat/completions -s \
-H "Content-Type: application/json" \
-H "Authorization: Bearer gsk_sugCjVCMMYSlWWPmEfPCWGdyb3FYPqJaOkzLLyK9eF5uUpBUFcZagsk_sugCjVCMMYSlWWPmEfPCWGdyb3FYPqJaOkzLLyK9eF5uUpBUFcZa" \
-d '{
  "model": "live_search.duckduckgo",
  "messages": [{
      "role": "user",
      "content": "Explain the importance of fast language models"
  }]
}'
