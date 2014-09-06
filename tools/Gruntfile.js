module.exports = function(grunt){
	grunt.initConfig({
		uglify:{
			options:{
				preserveComments:"some"
			},
			dist:{
				files:{
					"../public/bubble.all.min.js":
					["common.js","fastclick.js","rmodal.js"]
					.map(function(i){
						return "../public/js/"+i;
					})
				}
			}
		},
		watch: {
			files:"../public/less/*",
			tasks: ["less"]
		},
		less: {
			development: {
				options: {
					paths: ["../public/less/"],
					yuicompress: true
				},
				files: {
					"../public/css/style.css": "../public/less/style.less"
				}
			}
		},

	});

	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.registerTask('default',["uglify"]);
};