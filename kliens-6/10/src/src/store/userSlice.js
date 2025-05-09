import { createSlice } from '@reduxjs/toolkit'

const initialState = {
  user: null,
  isLoggedIn: false
}

export const userSlice = createSlice({
  name: 'user',
  initialState,
  reducers: {
    setUser: (state, action) => {
        state.user = action.payload
        state.isLoggedIn = true
    },
    logOut: (state) => {
        state.user = null
        state.isLoggedIn = false
    }
  }
})

// Action creators are generated for each case reducer function
export const { setUser, logOut } = userSlice.actions

export default userSlice.reducer