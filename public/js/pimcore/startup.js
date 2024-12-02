pimcore.registerNS("pimcore.plugin.ClassificationStoreSyndicatorBundle");

pimcore.plugin.ClassificationStoreSyndicatorBundle = Class.create({

    initialize: function () {
        document.addEventListener(pimcore.events.pimcoreReady, this.pimcoreReady.bind(this));
    },

    pimcoreReady: function (e) {
        // alert("ClassificationStoreSyndicatorBundle ready!");
    }
});

var ClassificationStoreSyndicatorBundlePlugin = new pimcore.plugin.ClassificationStoreSyndicatorBundle();
