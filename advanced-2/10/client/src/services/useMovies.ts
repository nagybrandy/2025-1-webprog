import { useQuery } from "@tanstack/react-query"
import api from "./api"

export const useMovies = () => {
    return useQuery({
        queryKey: ["movies"],
        queryFn: () => {
            return api.get("/movies")
        },
        select: (data) => data.data,
    })
}

