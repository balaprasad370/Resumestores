/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function(config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    // Not recommended.
    config.enterMode = CKEDITOR.ENTER_DIV;
    config.removePlugins = 'elementspath';
    // Changes magic line color to blue.
    CKEDITOR.config.magicline_color = '#fff';
    config.height = '300px';




    config.toolbar = [
        { name: 'basicstyles', items: ['Bold', 'save', 'Italic', 'Underline', 'Strike'] },
        { name: 'paragraph', items: ['NumberedList', 'BulletedList'] },
        { name: 'clipboard', items: ['-', 'Undo', 'Redo'] },
        { name: 'basicstyles', items: ['Subscript', 'Superscript', 'RemoveFormat'] },

        { name: 'links', items: ['Link', 'Unlink'] }

    ];
    config.resize_enabled = false;


    // config.toolbar = [
    //     ['Source', '-', 'Bold', 'Italic']
    //     ['NumberedList0', 'BulletedList']
    // ];

};