module.exports = function(grunt)
{
	// Project configuration. 
	grunt.initConfig(
	{
	  concat: 
	  {
	    css: 
	    {
	      src: ['src/style/bootstrap.min.css', 'src/style/style.css'],
	      dest: 'build/style/style.min.css',
	    },
	    js:
	    {
	    	src: ['src/scripts/jquery.min.js', 'src/scripts/bootstrap.min.js'],
	      	dest: 'build/scripts/scripts.min.js',
	    }
	  },
	  cssmin: 
	  {
		target: 
		{
		    files: 
		    {
		      'build/style/style.min.css': ['build/style/style.min.css']
		    }
		  }
	   },
	   copy: 
	   {
		  files: 
		  {
		    cwd: 'src/',  // set working folder / root to copy
		    src: ['index.php', 'getData.php', 'recieve_request.php', 'request_process.php'],           // copy all files and subfolders
		    dest: 'build/',    // destination folder
		    expand: true           // required when using cwd
		  }
		}
	});



	grunt.registerTask("default", function()
	{
		grunt.loadNpmTasks('grunt-contrib-concat');
		grunt.loadNpmTasks('grunt-contrib-cssmin');
		grunt.loadNpmTasks('grunt-contrib-copy');
	});
}; 
