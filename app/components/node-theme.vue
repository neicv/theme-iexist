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
		<h3 class="uk-margin-remove">Main {{ 'Position' | trans }}</h3>
        
	
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
					<th class='uk-text-center'>{{ 'Divider' | trans }}</th>
					<th class='uk-text-center'>{{ 'Contrast' | trans }}</th>
				</tr>
			</thead>
			<tbody>
			
			
				<tr>
					<td class="uk-width-1-10 uk-text-left">
					
					<label for="form-top-style" class="uk-form-label">{{ 'Top A' | trans }}</label>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-block-bg" class="uk-form-width-medium" v-model="node.theme.top_block_bg">
								<option value="uk-block-default">{{ 'Default' | trans }}</option>
								<option value="uk-block-muted">{{ 'Muted' | trans }}</option>
								<option value="uk-block-primary">{{ 'Primary' | trans }}</option>
								<option value="uk-block-secondary">{{ 'Secondary' | trans }}</option>
							 </select>
						</div>				 
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-block-padding" class="uk-form-width-medium" v-model="node.theme.top_block_padding">
								<option value="">{{ 'Default' | trans }}</option>
								<option value=" uk-block-large">{{ 'Large' | trans }}</option>
								<option value=" tm-block-padding-collapse">{{ 'None' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-container-width" class="uk-form-width-medium" v-model="node.theme.top_container_width">
								<option value="uk-container uk-container-center">{{ 'Default' | trans }}</option>
								<option value="uk-container uk-container-center tm-container-small">{{ 'Small' | trans }}</option>
								<option value="">{{ 'Full width' | trans }}</option>
							</select>
						</div>
					</td>
					<td class='uk-text-center'>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.top_block_divider"></label>
						</p>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.top_block_contrast"></label>
						</p>
					</td>
				</tr>
			
				<tr>
					<td class="uk-width-1-10 uk-text-left">
					
					<label for="form-top-b-style" class="uk-form-label">{{ 'Top B' | trans }}</label>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-b-block-bg" class="uk-form-width-medium" v-model="node.theme.top_b_block_bg">
								<option value="uk-block-default">{{ 'Default' | trans }}</option>
								<option value="uk-block-muted">{{ 'Muted' | trans }}</option>
								<option value="uk-block-primary">{{ 'Primary' | trans }}</option>
								<option value="uk-block-secondary">{{ 'Secondary' | trans }}</option>
							 </select>
						</div>				 
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-b-block-padding" class="uk-form-width-medium" v-model="node.theme.top_b_block_padding">
								<option value="">{{ 'Default' | trans }}</option>
								<option value=" uk-block-large">{{ 'Large' | trans }}</option>
								<option value=" tm-block-padding-collapse">{{ 'None' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-b-container-width" class="uk-form-width-medium" v-model="node.theme.top_b_container_width">
								<option value="uk-container uk-container-center">{{ 'Default' | trans }}</option>
								<option value="uk-container uk-container-center tm-container-small">{{ 'Small' | trans }}</option>
								<option value="">{{ 'Full width' | trans }}</option>
							</select>
						</div>
					</td>
					<td class='uk-text-center'>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.top_b_block_divider"></label>
						</p>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.top_b_block_contrast"></label>
						</p>
					</td>
				</tr>
			
				<tr>
					<td class="uk-width-1-10 uk-text-left">
					
					<label for="form-top-c-style" class="uk-form-label">{{ 'Top C' | trans }}</label>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-c-block-bg" class="uk-form-width-medium" v-model="node.theme.top_c_block_bg">
								<option value="uk-block-default">{{ 'Default' | trans }}</option>
								<option value="uk-block-muted">{{ 'Muted' | trans }}</option>
								<option value="uk-block-primary">{{ 'Primary' | trans }}</option>
								<option value="uk-block-secondary">{{ 'Secondary' | trans }}</option>
							 </select>
						</div>				 
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-c-block-padding" class="uk-form-width-medium" v-model="node.theme.top_c_block_padding">
								<option value="">{{ 'Default' | trans }}</option>
								<option value=" uk-block-large">{{ 'Large' | trans }}</option>
								<option value=" tm-block-padding-collapse">{{ 'None' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-c-container-width" class="uk-form-width-medium" v-model="node.theme.top_c_container_width">
								<option value="uk-container uk-container-center">{{ 'Default' | trans }}</option>
								<option value="uk-container uk-container-center tm-container-small">{{ 'Small' | trans }}</option>
								<option value="">{{ 'Full width' | trans }}</option>
							</select>
						</div>
					</td>
					<td class='uk-text-center'>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.top_c_block_divider"></label>
						</p>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.top_c_block_contrast"></label>
						</p>
					</td>
				</tr>

				<tr>
					<td class="uk-width-1-10 uk-text-left">
					
					<label for="form-top-d-style" class="uk-form-label">{{ 'Top D' | trans }}</label>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-d-block-bg" class="uk-form-width-medium" v-model="node.theme.top_d_block_bg">
								<option value="uk-block-default">{{ 'Default' | trans }}</option>
								<option value="uk-block-muted">{{ 'Muted' | trans }}</option>
								<option value="uk-block-primary">{{ 'Primary' | trans }}</option>
								<option value="uk-block-secondary">{{ 'Secondary' | trans }}</option>
							 </select>
						</div>				 
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-d-block-padding" class="uk-form-width-medium" v-model="node.theme.top_d_block_padding">
								<option value="">{{ 'Default' | trans }}</option>
								<option value=" uk-block-large">{{ 'Large' | trans }}</option>
								<option value=" tm-block-padding-collapse">{{ 'None' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-top-d-container-width" class="uk-form-width-medium" v-model="node.theme.top_d_container_width">
								<option value="uk-container uk-container-center">{{ 'Default' | trans }}</option>
								<option value="uk-container uk-container-center tm-container-small">{{ 'Small' | trans }}</option>
								<option value="">{{ 'Full width' | trans }}</option>
							</select>
						</div>
					</td>
					<td class='uk-text-center'>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.top_d_block_divider"></label>
						</p>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.top_d_block_contrast"></label>
						</p>
					</td>
				</tr>
				
				<tr>
					<td class="uk-width-1-10 uk-text-left">
					
					<label for="form-main-style" class="uk-form-label">{{ 'Main' | trans }}</label>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-main-block-bg" class="uk-form-width-medium" v-model="node.theme.main_block_bg">
								<option value="uk-block-default">{{ 'Default' | trans }}</option>
								<option value="uk-block-muted">{{ 'Muted' | trans }}</option>
								<option value="uk-block-primary">{{ 'Primary' | trans }}</option>
								<option value="uk-block-secondary">{{ 'Secondary' | trans }}</option>
								<option value="">{{ 'None' | trans }}</option>
							 </select>
						</div>				 
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-main-block-padding" class="uk-form-width-medium" v-model="node.theme.main_block_padding">
								<option value="">{{ 'Default' | trans }}</option>
								<option value=" uk-block-large">{{ 'Large' | trans }}</option>
								<option value=" tm-block-padding-collapse">{{ 'None' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-main-container-width" class="uk-form-width-medium" v-model="node.theme.main_container_width">
								<option value="uk-container uk-container-center">{{ 'Default' | trans }}</option>
								<option value="uk-container uk-container-center tm-container-small">{{ 'Small' | trans }}</option>
								<option value="">{{ 'Full width' | trans }}</option>
							</select>
						</div>
					</td>
					<td class='uk-text-center'>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.main_block_divider"></label>
						</p>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.main_block_contrast"></label>
						</p>
					</td>
				</tr>				
				
				<tr>
					<td class="uk-width-1-10 uk-text-left">
					
					<label for="form-bottom-style" class="uk-form-label">{{ 'Bottom A' | trans }}</label>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-bottom-block-bg" class="uk-form-width-medium" v-model="node.theme.bottom_block_bg">
								<option value="uk-block-default">{{ 'Default' | trans }}</option>
								<option value="uk-block-muted">{{ 'Muted' | trans }}</option>
								<option value="uk-block-primary">{{ 'Primary' | trans }}</option>
								<option value="uk-block-secondary">{{ 'Secondary' | trans }}</option>
							 </select>
						</div>				 
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-bottom-block-padding" class="uk-form-width-medium" v-model="node.theme.bottom_block_padding">
								<option value="">{{ 'Default' | trans }}</option>
								<option value=" uk-block-large">{{ 'Large' | trans }}</option>
								<option value=" tm-block-padding-collapse">{{ 'None' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-bottom-container-width" class="uk-form-width-medium" v-model="node.theme.bottom_container_width">
								<option value="uk-container uk-container-center">{{ 'Default' | trans }}</option>
								<option value="uk-container uk-container-center tm-container-small">{{ 'Small' | trans }}</option>
								<option value="">{{ 'Full width' | trans }}</option>
							</select>
						</div>
					</td>
					<td class='uk-text-center'>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.bottom_block_divider"></label>
						</p>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.bottom_block_contrast"></label>
						</p>
					</td>
				</tr>
				
				<tr>
					<td class="uk-width-1-10 uk-text-left">
					
					<label for="form-bottom-b-style" class="uk-form-label">{{ 'Bottom B' | trans }}</label>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-bottom-b-block-bg" class="uk-form-width-medium" v-model="node.theme.bottom_b_block_bg">
								<option value="uk-block-default">{{ 'Default' | trans }}</option>
								<option value="uk-block-muted">{{ 'Muted' | trans }}</option>
								<option value="uk-block-primary">{{ 'Primary' | trans }}</option>
								<option value="uk-block-secondary">{{ 'Secondary' | trans }}</option>
							 </select>
						</div>				 
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-bottom-b-block-padding" class="uk-form-width-medium" v-model="node.theme.bottom_b_block_padding">
								<option value="">{{ 'Default' | trans }}</option>
								<option value=" uk-block-large">{{ 'Large' | trans }}</option>
								<option value=" tm-block-padding-collapse">{{ 'None' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-bottom-b-container-width" class="uk-form-width-medium" v-model="node.theme.bottom_b_container_width">
								<option value="uk-container uk-container-center">{{ 'Default' | trans }}</option>
								<option value="uk-container uk-container-center tm-container-small">{{ 'Small' | trans }}</option>
								<option value="">{{ 'Full width' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.bottom_b_block_divider"></label>
						</p>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.bottom_b_block_contrast"></label>
						</p>
					</td>
				</tr>
				
				<tr>
					<td class="uk-width-1-10 uk-text-left">
					
					<label for="form-bottom-c-style" class="uk-form-label">{{ 'Bottom C' | trans }}</label>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-bottom-c-block-bg" class="uk-form-width-medium" v-model="node.theme.bottom_c_block_bg">
								<option value="uk-block-default">{{ 'Default' | trans }}</option>
								<option value="uk-block-muted">{{ 'Muted' | trans }}</option>
								<option value="uk-block-primary">{{ 'Primary' | trans }}</option>
								<option value="uk-block-secondary">{{ 'Secondary' | trans }}</option>
							 </select>
						</div>				 
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-bottom-c-block-padding" class="uk-form-width-medium" v-model="node.theme.bottom_c_block_padding">
								<option value="">{{ 'Default' | trans }}</option>
								<option value=" uk-block-large">{{ 'Large' | trans }}</option>
								<option value=" tm-block-padding-collapse">{{ 'None' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-bottom-c-container-width" class="uk-form-width-medium" v-model="node.theme.bottom_c_container_width">
								<option value="uk-container uk-container-center">{{ 'Default' | trans }}</option>
								<option value="uk-container uk-container-center tm-container-small">{{ 'Small' | trans }}</option>
								<option value="">{{ 'Full width' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.bottom_c_block_divider"></label>
						</p>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.bottom_c_block_contrast"></label>
						</p>
					</td>
				</tr>
				
				<tr>
					<td class="uk-width-1-10 uk-text-left">
					
					<label for="form-bottom-d-style" class="uk-form-label">{{ 'Bottom D' | trans }}</label>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-bottom-d-block-bg" class="uk-form-width-medium" v-model="node.theme.bottom_d_block_bg">
								<option value="uk-block-default">{{ 'Default' | trans }}</option>
								<option value="uk-block-muted">{{ 'Muted' | trans }}</option>
								<option value="uk-block-primary">{{ 'Primary' | trans }}</option>
								<option value="uk-block-secondary">{{ 'Secondary' | trans }}</option>
							 </select>
						</div>				 
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-bottom-d-block-padding" class="uk-form-width-medium" v-model="node.theme.bottom_d_block_padding">
								<option value="">{{ 'Default' | trans }}</option>
								<option value=" uk-block-large">{{ 'Large' | trans }}</option>
								<option value=" tm-block-padding-collapse">{{ 'None' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-bottom-d-container-width" class="uk-form-width-medium" v-model="node.theme.bottom_d_container_width">
								<option value="uk-container uk-container-center">{{ 'Default' | trans }}</option>
								<option value="uk-container uk-container-center tm-container-small">{{ 'Small' | trans }}</option>
								<option value="">{{ 'Full width' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.bottom_d_block_divider"></label>
						</p>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.bottom_d_block_contrast"></label>
						</p>
					</td>
				</tr>
				
				<tr>
					<td class="uk-width-1-10 uk-text-left">
					
					<label for="form-footer-style" class="uk-form-label">{{ 'Footer' | trans }}</label>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-footer-block-bg" class="uk-form-width-medium" v-model="node.theme.footer_block_bg">
								<option value="uk-block-default">{{ 'Default' | trans }}</option>
								<option value="uk-block-muted">{{ 'Muted' | trans }}</option>
								<option value="uk-block-primary">{{ 'Primary' | trans }}</option>
								<option value="uk-block-secondary">{{ 'Secondary' | trans }}</option>
							 </select>
						</div>				 
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-footer-block-padding" class="uk-form-width-medium" v-model="node.theme.footer_block_padding">
								<option value="">{{ 'Default' | trans }}</option>
								<option value=" uk-block-large">{{ 'Large' | trans }}</option>
								<option value=" tm-block-padding-collapse">{{ 'None' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<div class="uk-form-controls-condensed">
							<select id="form-footer-container-width" class="uk-form-width-medium" v-model="node.theme.footer_container_width">
								<option value="uk-container uk-container-center">{{ 'Default' | trans }}</option>
								<option value="uk-container uk-container-center tm-container-small">{{ 'Small' | trans }}</option>
								<option value="">{{ 'Full width' | trans }}</option>
							</select>
						</div>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.footer_block_divider"></label>
						</p>
					</td>
					<td>
						<p class="uk-form-controls-condensed">
							<label><input type="checkbox" v-model="node.theme.footer_block_contrast"></label>
						</p>
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

    module.exports = {

        section: {
            label: 'Theme',
            priority: 90
        },

        props: ['node']

    };

    window.Site.components['node-theme'] = module.exports;

</script>
