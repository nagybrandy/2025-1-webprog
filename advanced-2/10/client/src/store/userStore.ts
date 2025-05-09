import { create } from 'zustand'

type Store = {
  user: {
    name: string | null
    isLoggedIn: boolean
    email: string | null
  }
  login: (user: { name: string, email: string }) => void
  logout: () => void
}

const userStore = create<Store>()((set) => ({
  user:{
    name: null,
    isLoggedIn: false,
    email: null,
  },
  login: (payload) => set((state) => {
    return ({ user: { ...state.user, ...payload, isLoggedIn: true } })
  }),
  logout: () => set((state) => ({ user: { ...state.user, isLoggedIn: false } })),
}))


export default userStore