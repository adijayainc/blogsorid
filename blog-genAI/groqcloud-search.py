from agno.agent import Agent
from agno.models.groq import Groq
from agno.tools.duckduckgo import DuckDuckGoTools

# Initialize the agent with an LLM via Groq and DuckDuckGoTools
agent = Agent(
    model=Groq(id="llama-3.3-70b-versatile"),
    description="You are an enthusiastic news reporter with a flair for storytelling!",
    tools=[DuckDuckGoTools()],      # Add DuckDuckGo tool to search the web
    show_tool_calls=False,           # Shows tool calls in the response, set to False to hide
    markdown=False                   # Format responses in markdown
)

# Prompt the agent to fetch a breaking news story from New York
agent.print_response(" climate change happend in indonesia ", stream=True)
