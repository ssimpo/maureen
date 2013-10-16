var profile = {
	basePath: "./",
    releaseDir: "release",
	releaseName: "live",
	action: "release",
	
	layerOptimize: "shrinksafe",
	optimize: "shrinksafe",
	cssOptimize: "comments",
	mini: false,
	insertAbsMids: false,
	
	staticHasFeatures: {
	},
	
	packages: [
		{ name: "dojo", location : "dojo" },
		{ name: "dijit", location :"dijit" },
		{ name: "dojox", location : "dojox" },
		{ name: "simpo", location : "simpo" },
		{ name: "maureen", location : "maureen" }
	],
	
	layers: {
    }
}