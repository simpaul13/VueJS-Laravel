import index from "./components/index";
import about from "./components/about";

export default {
    mode : 'history',

    routes: [
        {
            path : "/",
            component:index,
            name : "Home",
        },
        {
            path : "/about",
            component:about,
            name : "About",
        },
    ],

    linkActiveClass: "active"
}
