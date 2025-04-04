import { Button } from "./components/ui/button"

interface GreetingProps {
    name: string
    age: number
}

const Greeting = ({ name, age } : GreetingProps) => {
  console.log(name)
  return (
    <div>
      Hello {name}, you are {age} years old!
      <Button>{name}</Button>
    </div>
  )
}

export default Greeting
