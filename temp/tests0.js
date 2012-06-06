window.Specs = {
	"css3-background": {
		"title": "Backgrounds and Borders",
		"properties": {
			"background-repeat": ["space", "round"].concat(["repeat", "space", "round", "no-repeat"].times(2)),
			"background-attachment": "local",
			"background": [
				"url(foo.png), url(bar.svg)",
				"top left / 50% 60%",
				"border-box",
				"border-box padding-box",
				"url(foo.png) bottom right / cover padding-box content-box"
			],
			"border-radius": ["10px", "50%", "10px / 20px", "2px 4px 8px 16px"],
			"border-image-slice": ['10', '30%'].times(1, 4).concat(["fill 30%", "fill 10", "fill 2 4 8% 16%", "30% fill", "10 fill", "2 4 8% 16% fill"])
		}
	}

};
