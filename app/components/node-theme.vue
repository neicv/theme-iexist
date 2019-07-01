<template>

    <div class="uk-form-horizontal">

        <template v-if="node.type === 'page'">

            <div class="uk-form-row">
                <span class="uk-form-label">{{ 'Title' | trans }}</span>
                <div class="uk-form-controls uk-form-controls-text">
                    <label><input type="checkbox" v-model="node.theme.title_hide"> {{ 'Hide Title' | trans }}</label>
                </div>
            </div>

            <div class="uk-form-row">
                <span class="uk-form-label">{{ 'Title Size' | trans }}</span>
                <div class="uk-form-controls uk-form-controls-text">
                    <label><input type="checkbox" v-model="node.theme.title_large"> {{ 'Extra large title.' | trans }}</label>
                </div>
            </div>

            <div class="uk-form-row">
                <span class="uk-form-label">{{ 'Alignment' | trans }}</span>
                <div class="uk-form-controls uk-form-controls-text">
                    <label><input type="checkbox" v-model="node.theme.alignment"> {{ 'Center the title and content.' | trans }}</label>
                </div>
            </div>

        </template>

        <div class="uk-form-row">
            <label for="form-class" class="uk-form-label">{{ 'HTML Class' | trans }}</label>
            <div class="uk-form-controls">
                <input id="form-class" class="uk-form-width-large" type="text" v-model="node.theme.html_class">
            </div>
        </div>

        <div class="uk-form-row">
            <span class="uk-form-label">{{ 'Sidebar' | trans }}</span>
            <div class="uk-form-controls uk-form-controls-text">
                <label><input type="checkbox" v-model="node.theme.sidebar_first"> {{ 'Show the sidebar before the content.' | trans }}</label>
            </div>
        </div>

        <div class="uk-form-row">
            <label class="uk-form-label">Hero {{ 'Position' | trans }}</label>
            <div class="uk-form-controls uk-form-controls-text">
                <p class="uk-form-controls-condensed">
                    <label><input type="checkbox" v-model="node.theme.hero_viewport"> {{ 'Full viewport height' | trans }}</label>
                </p>
                <p class="uk-form-controls-condensed">
                    <label><input type="checkbox" v-model="node.theme.hero_width"> {{ 'Full Container Width' | trans }}</label>
                </p>
                <p class="uk-form-controls-condensed">
                    <select id="form-hero-style" class="uk-form-width-large" v-model="node.theme.hero_style">
                        <option value="uk-block-default">{{ 'Default' | trans }}</option>
                        <option value="uk-block-muted">{{ 'Muted' | trans }}</option>
                        <option value="uk-block-primary">{{ 'Primary' | trans }}</option>
                        <option value="uk-block-secondary">{{ 'Secondary' | trans }}</option>
                    </select>
                </p>
                <p class="uk-form-help-block">{{ 'Select the background color.' | trans }}</p>
                <p class="uk-form-controls-condensed">
                    <select id="form-hero-blend" class="uk-form-width-large" v-model="node.theme.hero_blend">
                        <option value="">{{ 'None' | trans }}</option>
                        <option value="multiply">{{ 'Multiply' | trans }}</option>
                        <option value="screen">{{ 'Screen' | trans }}</option>
                        <option value="overlay">{{ 'Overlay' | trans }}</option>
                        <option value="darken">{{ 'Darken' | trans }}</option>
                        <option value="lighten">{{ 'Lighten' | trans }}</option>
                        <option value="color-dodge">{{ 'Color Dodge' | trans }}</option>
                        <option value="color-burn">{{ 'Color Burn' | trans }}</option>
                        <option value="hard-light">{{ 'Hard Light' | trans }}</option>
                        <option value="soft-light">{{ 'Soft Light' | trans }}</option>
                        <option value="difference">{{ 'Difference' | trans }}</option>
                        <option value="exclusion">{{ 'Exclusion' | trans }}</option>
                        <option value="hue">{{ 'Hue' | trans }}</option>
                        <option value="saturation">{{ 'Saturation' | trans }}</option>
                        <option value="color">{{ 'Color' | trans }}</option>
                        <option value="luminosity">{{ 'Luminosity' | trans }}</option>
                    </select>
                </p>
                <p class="uk-form-help-block">{{ 'Select a background blend mode.' | trans }}</p>
                <p class="uk-form-controls-condensed">
                    <label><input type="checkbox" v-model="node.theme.hero_contrast"> {{ 'Invert colors' | trans }}</label>
                </p>
                <p class="uk-form-controls-condensed uk-margin-bottom">
                    <label><input type="checkbox" v-model="node.theme.hero_parallax"> {{ 'Enable parallax effect' | trans }}</label>
                </p>
                <p class="uk-form-controls-condensed uk-form-width-large"><input-image :source.sync="node.theme.hero_image"></input-image></p>
                <p class="uk-form-help-block">{{ 'Select a background image for the hero position.' | trans }}</p>
            </div>
        </div>

		<hr class="uk-article-divider">
		<h3 id='main_img' class="uk-margin-remove">Main {{ 'Position' | trans }}</h3>
        
	
        <div class="uk-form-row">
            <label class="uk-form-label">{{ 'Background Image' | trans }}</label>
            <div class="uk-form-controls uk-form-controls-text">
				<p class="uk-form-controls-condensed">
                    <label><input type="checkbox" v-model="node.theme.image_alt_enable"> {{ 'Enable' | trans }}</label>
                </p>
				<span v-if="node.theme.image_alt_enable">
			    <p class="uk-form-help-block">{{ 'Select the background color.' | trans }}</p>
                <p class="uk-form-controls-condensed">
                    <select id="form-image-alt-blend" class="uk-form-width-large" v-model="node.theme.image_alt_blend">
                        <option value="">{{ 'None' | trans }}</option>
                        <option value="multiply">{{ 'Multiply' | trans }}</option>
                        <option value="screen">{{ 'Screen' | trans }}</option>
                        <option value="overlay">{{ 'Overlay' | trans }}</option>
                        <option value="darken">{{ 'Darken' | trans }}</option>
                        <option value="lighten">{{ 'Lighten' | trans }}</option>
                        <option value="color-dodge">{{ 'Color Dodge' | trans }}</option>
                        <option value="color-burn">{{ 'Color Burn' | trans }}</option>
                        <option value="hard-light">{{ 'Hard Light' | trans }}</option>
                        <option value="soft-light">{{ 'Soft Light' | trans }}</option>
                        <option value="difference">{{ 'Difference' | trans }}</option>
                        <option value="exclusion">{{ 'Exclusion' | trans }}</option>
                        <option value="hue">{{ 'Hue' | trans }}</option>
                        <option value="saturation">{{ 'Saturation' | trans }}</option>
                        <option value="color">{{ 'Color' | trans }}</option>
                        <option value="luminosity">{{ 'Luminosity' | trans }}</option>
                    </select>
                </p>
                <p class="uk-form-controls-condensed">
                    <label><input type="checkbox" v-model="node.theme.contrast_alt"> {{ 'Invert colors' | trans }}</label>
                </p>
                <p class="uk-form-controls-condensed uk-form-width-large"><input-image :source.sync="node.theme.image_alt"></input-image></p>
                <p class="uk-form-help-block">{{ 'Select an alternative image for the page.' | trans }}</p>
				</span>
            </div>
        </div>
		

		<hr class="uk-article-divider">
		<h2 class="uk-margin-remove">{{ 'Position Appearance' | trans }}</h2>
		<p>{{ 'Choose the appearance settings for each position.' | trans }}</p>

		<div class="uk-form-row">
		<table class="uk-table uk-table-middle tm-width uk-text-center">
			<thead>
				<tr>
					<th class="uk-text-left">{{ 'Position' | trans }}</th>
					<th class="uk-text-center">{{ 'Background' | trans }}</th>
					<th class="uk-text-center">{{ 'Padding' | trans }}</th>
					<th class="uk-text-center">{{ 'Block width' | trans }}</th>
					<th class="uk-text-center">{{ 'Full height' | trans }}</th>
					<th class="uk-text-center">{{ 'Vertical center' | trans }}</th>
					<th class='uk-text-center'>{{ 'Divider' | trans }}</th>
					<th class='uk-text-center'>{{ 'Contrast' | trans }}</th>
					<th class='uk-text-center'>{{ 'Image' | trans }}</th>
				</tr>
			</thead>
			<tbody>

				<tr v-for="(key, val) in node.theme.block">
					<td class="uk-width-1-10 uk-text-left">
					
					<!--<label for="form-top-style" class="uk-form-label">{{ 'Top A' | trans }}</label>-->
					<label for="form-top-style" class="uk-form-label" v-text="key | warp"></label>

					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-block-bg" class="uk-form-width-medium" v-model="val.block_bg">
								<option value="uk-block-default">{{ 'Default' | trans }}</option>
								<option value="uk-block-muted">{{ 'Muted' | trans }}</option>
								<option value="uk-block-primary">{{ 'Primary' | trans }}</option>
								<option value="uk-block-secondary">{{ 'Secondary' | trans }}</option>
							 </select>
						</div>				 
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-block-padding" class="uk-form-width-medium" v-model="val.block_padding">
								<option value="">{{ 'Default' | trans }}</option>
								<option value=" uk-block-large">{{ 'Large' | trans }}</option>
								<option value=" tm-block-padding-collapse">{{ 'None' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-container-width" class="uk-form-width-medium" v-model="val.container_width">
								<option value="uk-container uk-container-center">{{ 'Default' | trans }}</option>
								<option value="uk-container uk-container-center tm-container-small">{{ 'Small' | trans }}</option>
								<option value="">{{ 'Full width' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="val.block_fullheight"></label>
						</p>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="val.block_middle"></label>
						</p>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="val.block_divider"></label>
						</p>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="val.block_contrast"></label>
						</p>
					</td>
					<td>
 						<div v-if="key === 'main'" class="uk-form-controls-condensed uk-form-small uk-text-left">
							<a class="uk-text-center uk-display-block uk-margin-remove uk-link-muted" :href="$url.route('admin/site/page/edit', {id: node.id, active: 1}) + '#main_img'">
								<img width="50" height="50" :alt="'Placeholder Image' | trans" v-if="node.theme.image_alt" :src="$url.route(node.theme.image_alt)">
								<img width="50" height="50" :alt="'Placeholder Image' | trans" v-else :src="$url('app/system/assets/images/placeholder-image.svg')">
    						</a>
						</div>
						<div v-else class="uk-form-controls-condensed uk-form-small uk-text-left">
							<input-image-theme :source.sync="val.block_image"></input-image-theme>
						</div>
					</td>
				</tr>
        	</tbody>
		</table>
		</div>
		
        <div class="uk-form-row">
                <p class="uk-form-help-block uk-margin">{{ 'Note: Position settings only work if you publish a widget in that position.' | trans }}</p>
        </div>
    </div>
</template>

<script>

	require('./input-image-theme.vue');

    module.exports = {

        section: {
            label: 'Theme',
            priority: 90
        },

		props: ['node'],
		
	    //data: { 
	  	//	positionStr:"",
	  		
  		//},

		//computed: {
        //    bottom_E_block_contrast: function () {
        //        return this.node.theme.bottom_d_block_contrast 
		//	}
		//},

		filters: {
    		warp: function (myStr) {	

				myStr = myStr[0].toUpperCase() + myStr.slice(1)
				var myStr2 = myStr.split('_')
      			myStr = myStr2[0]
				if (myStr2.length - 1){
      				myStr = myStr + ' ' + myStr2[myStr2.length - 1].toUpperCase()
					}
				return myStr
    		},
		},

    };

    window.Site.components['node-theme'] = module.exports;

</script>
