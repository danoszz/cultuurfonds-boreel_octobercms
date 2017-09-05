'use strict';

var project = require('./project.json');
var path = require('path');
var fs = require('fs');

var newStructure = '../assets';

// Dynamically start all tasks
fs.readdirSync('../' + project.foldersName.devtools + '/gulp/tasks/')
    .forEach(function(task) {
        if (path.extname(task) !== '.js') return;
        require('../' + project.foldersName.devtools + '/gulp/tasks/' + task);
    });
