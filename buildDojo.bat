cls
node dojo/dojo.js load=build --profile maureen.profile.js --release
del release\*.js.uncompressed.js /S /Q
del release\*.js.map /S /Q
del release\*.js.consoleStripped.js /S /Q
del release\*.uncompressed.js /S /Q