/**
 * Created by Administrator on 2017/1/21.
 */
import functions from "./functions";
import APIConfig from "./../config/APIConfig";
export default{
    install(Vue)
    {
        Vue.prototype.functions=functions;
        Vue.prototype.APIConfig=APIConfig;
    }
}