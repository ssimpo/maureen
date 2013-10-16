reset
node ./scripts/dojo/dojo.js load=build --profile maureen.profile.js --release
del ./scripts/release/*.js.uncompressed.js -S -Q
del ./scripts/release/*.js.map -S -Q
del ./scripts/release/*.js.consoleStripped.js -S -Q
del ./scripts/release/*.uncompressed.js -S -Q