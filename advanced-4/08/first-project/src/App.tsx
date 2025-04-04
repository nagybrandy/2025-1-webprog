import './App.css'
import Greeting from './Greeting'
import TableDemo from './Table'
import people from "./assets/people.json"

function App() {
  return (
    <>
      {people.map((person) => <Greeting key={person.id} name={person.name} age={person.age} />)}
      <TableDemo />
    </>
  )
}

export default App
