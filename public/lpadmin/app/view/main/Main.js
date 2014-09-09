/**
 * This class is the main view for the application. It is specified in app.js as the
 * "autoCreateViewport" property. That setting automatically applies the "viewport"
 * plugin to promote that instance of this class to the body element.
 *
 * TODO - Replace this content of this view to suite the needs of your application.
 */

Ext.define('LPAdmin.view.main.Main', {
    extend: 'Ext.container.Container',

    xtype: 'app-main',

    controller: 'main',
    viewModel: {
        type: 'main'
    },

    layout: {
        type: 'border'
    },

    items: [
        {
            bind: {
                title: '{name}'
            },
            xtype: 'treepanel',
            region: 'west',
            width: 250,
            split: true,
            listeners: {
                select: 'onItemSelected'
            },
            root: {
                text: 'Модули',
                expanded: true,
                children: [
                    {
                        text: 'Формы',
                        expanded: false,
                        children: [
                            {
                                text: 'Анкета',
                                leaf: true,
                                id: 'menu-forms-anketa'
                            },
                            {
                                text: 'Бесплатный шаблон',
                                leaf: true,
                                id: 'menu-forms-free'
                            }
                        ]
                    }
                ]
            }
        },
        {
            region: 'center',
            xtype: 'panel',

            items: [
                {
                    title: 'Tab 1'
                }
            ]
        }
    ]
});
