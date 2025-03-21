#/bin/bash
export KEY="sk-13c9780d6f63429ebd3dd9f4ee06b186"
curl -H "Authorization: Bearer $KEY" http://adiai.adijaya.com:3000/api/models
echo " -------------------------------------"
echo " -------------------------------------"
echo " -------------------------------------"
curl -X POST http://adiai.adijaya.com:3000/api/chat/completions \
-H "Authorization: Bearer $KEY" \
-H "Content-Type: application/json" \
-d '{
      "model": "deepseek-r1-distill-qwen-32b",
      "messages": [
        {
          "role": "user",
          "content": "Why is the sky blue?"
        }
      ]
    }'
