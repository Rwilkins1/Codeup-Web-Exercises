var fs = require("fs");
var data = "John Jacob Jingleheimer Smith. His name is my name, too. Whenever we go out, the people alwyas shout: 'There goes John Jacob Jingleheimer Smith. Da-da-da-da-da-da-da'";

var writerStream = fs.createWriteStream('input.txt');

writerStream.write(data, 'UTF8');

writerStream.end();

writerStream.on('finish', function() {
	console.log("Write completed");
});