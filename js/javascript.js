window.setInterval((function(){
    var start = Date.now();
    var textNode = document.createTextNode('0');
    document.getElementById('seconds').appendChild(textNode);
    return function() {
         textNode.data = Math.floor((Date.now()-start)/2000);
         };
    }()), 1000);