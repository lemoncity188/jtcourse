import  Vue from "vue";
export  default{
    state:
    {
        NavBar:[] //导航栏
    },
    mutations:{
        setData(state,{key,data}) // 更改state的通用函数
        {
            state[key]=data;
            console.log(state.res);

        }
    },
    actions:{
        loadData(context,{url,key}) //url等于url:url
        {
            Vue.http.get(url).then((rs)=>{
                context.commit("setData",{key,data:rs.body});

            },(rs)=>{

            })
        }

    }
}