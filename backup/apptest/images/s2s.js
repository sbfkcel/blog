let svgstore = require('svgstore'),
	fs = require('fs');



let sprites = svgstore();

sprites.add('clock',fs.readFileSync('./svgs/clock.svg','utf8'));
sprites.add('call',fs.readFileSync('./svgs/call.svg','utf8'));

fs.writeFileSync('./img.svg',sprites);