<template>

    <style>
        .uk-overlay.tm-overlay  {    
            min-height: 56px !important; 
            min-width:  56px !important;
            max-width:  5%;
        }

        .uk-panel-badge.tm-panel-badge {
            top: 10px;
            right: 8px;
            padding: 4px 7px;
        }
    </style> 

    <a class="uk-text-center uk-display-block uk-margin-remove" v-if="!source" @click.prevent="pick">
        <img width="50" height="50" :alt="'Placeholder Image' | trans" :src="$url('app/system/assets/images/placeholder-image.svg')">
        <!--<p class="uk-text-muted uk-margin-small-top">{{ 'Select Image' | trans }}</p>-->
    </a>

    <figure class="uk-overlay uk-overlay-hover uk-visible-hover tm-overlay {{ class }}"  v-else>
        

        <img  :src="source.indexOf('blob:') !== 0  ? $url(source) : source">

        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-fade"></figcaption>

        <a class="uk-position-cover" @click.prevent="pick"></a>
        
        <div class="uk-panel-badge pk-panel-badge uk-hidden tm-panel-badge">
            <ul class="uk-subnav pk-subnav-icon">
                <li><a class="pk-icon-delete pk-icon-hover" :title="'Delete' | trans" data-uk-tooltip="{delay: 500}" @click.prevent="remove"></a></li>
            </ul>
        </div>
        
    </figure>

    <v-modal v-ref:modal large>

        <panel-finder :root="storage" v-ref:finder :modal="true"></panel-finder>

        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-link uk-modal-close" type="button">{{ 'Cancel' | trans }}</button>
            <button class="uk-button uk-button-primary" type="button" :disabled="!hasSelection()" @click.prevent="select">{{ 'Select' | trans }}</button>
        </div>

    </v-modal>

</template>

<script>

    module.exports = {

        props: {
            class: {default: ''},
            source: {default: ''}
        },

        data: function () {

            return _.merge({}, $pagekit);
            
        },

        methods: {

            pick: function() {
                this.$refs.modal.open();
            },

            select: function() {
                this.source = this.$refs.finder.getSelected()[0];
                this.$dispatch('image-selected', this.source);
                this.$refs.finder.removeSelection();
                this.$refs.modal.close();
            },

            remove: function() {
                this.source = ''
            },

            hasSelection: function() {
                var selected = this.$refs.finder.getSelected();
                return selected.length === 1 && this.$refs.finder.isImage(selected[0])
            }

        },

    };

    Vue.component('input-image-theme', function (resolve, reject) {
        Vue.asset({
            js: [
                'app/assets/uikit/js/components/upload.min.js',
                'app/system/modules/finder/app/bundle/panel-finder.js'
            ]
        }).then(function () {
            resolve(module.exports);
        })
    });

</script>