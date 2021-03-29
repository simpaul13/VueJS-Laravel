import axios from "axios";

class Status {

    static all(then) {
        return axios.get('api/products')
            .then(({data}) => then(data));
    }

}

export default Status;
