import { Button } from "@/components/ui/button"
import { Card } from "@/components/ui/card"
import { useTheme } from "./theme-provider"
import { NavLink } from "react-router"

const Navbar = () => {
    const { setTheme } = useTheme()

    return (
        <nav className="border-b z-50 shadow-lg rounded-full sticky top-5 mx-auto max-w-6xl w-11/12">
            <Card className="lg:p-0 lg:rounded-full rounded-full lg:shadow-lg shadow-md">
                <div className="container mx-auto px-4">
                    <div className="flex lg:flex-row flex-col gap-3 justify-between items-center lg:h-16">
                        <div className="flex items-center space-x-8">
                            <NavLink to="/" className="text-xl font-bold">
                                Cinema
                            </NavLink>
                            <span className="text-muted-foreground hover:text-foreground transition-colors cursor-pointer">
                                Screenings
                            </span>
                            <NavLink to="/movies" className="text-muted-foreground hover:text-foreground transition-colors cursor-pointer">
                                Movies
                            </NavLink>
                            <span className="text-muted-foreground hover:text-foreground transition-colors cursor-pointer">
                                My Bookings
                            </span>
                        </div>
                        <div className="flex items-center space-x-4">
                            <span className="text-muted-foreground">Welcome, User</span>
                            <Button variant="outline">
                                Logout
                            </Button>
                            <NavLink to="/login">
                                <Button variant="ghost">Login</Button>
                            </NavLink>
                            <Button>Register</Button>
                            <button className="bg-background rounded-full flex items-center justify-center w-8 h-8 border" onClick={() => setTheme(localStorage.getItem("theme") === "light" ? "dark" : "light")}>
                                🌙
                            </button>
                        </div>
                    </div>
                </div>
            </Card>
        </nav>
    )
}

export default Navbar
