import { configureStore } from '@reduxjs/toolkit'
import userReducer from './userSlice'
import { starwarsApi } from './swApi'

export default configureStore({
  reducer: {
    user: userReducer,
    [starwarsApi.reducerPath]: starwarsApi.reducer,
    /*     tracks: tracksReducer, */
    },
    middleware: (getDefaultMiddleware) =>
        getDefaultMiddleware().concat(starwarsApi.middleware),
})