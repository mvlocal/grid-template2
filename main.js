console.log('hello'); 
// from https://stackoverflow.com/questions/105034/create-guid-uuid-in-javascript
function generateGuid() {
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        const r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);
        return v.toString(16);
    });
}
 

var h = generateGuid();
console.log(h);
