var fs = require("fs");
var data = "Boy am I glad I know how to do node. I am so good at node that I can create a file out of thin air!";

var writerStream = fs.createWriteStream('practice.txt');

writerStream.write(data, 'UTF8');

writerStream.end();

writerStream.on('finish', function() {
	console.log("Write completed");
});