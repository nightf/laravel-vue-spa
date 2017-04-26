import VueRouter from 'vue-router';

let routes=[
{
	path:'/',
	component:require('./components/Example')
},
{
	path:'/about',
	component:require('./components/About')
},
{
	path:'/login',
	component:require('./components/Login')
},
{
	path:'/register',
	component:require('./components/Register')
}
];

export default new VueRouter({
	routes
});