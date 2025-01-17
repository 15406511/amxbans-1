{if $msg<>""}
	<div class="notice">
		{$msg|lang}
	</div>
{/if}
		<td id="main" valign="top" >
		{if $smarty.session.amxadmins_view == "yes"}
			<span class="title">{"_SITESETTINGS"|lang}</span>
			{assign var="lang" value=$true|getlanguage}
			<table width="95%" align="center"><tr><td>
				<table border="1" width="100%">
				<form method="POST">
				<table>
					<tr class="htable">
						<td colspan="2"><b>{"_SYSTEMSETTINGS"|lang}</b></td>
					</tr>
					<tr class="settings_line">
						<td width="50%">{"_DEFAULTLANG"|lang}</td>
						<td>{html_options name="language" values=$lang output=$lang selected=$current_lang}</td>
					</tr>
					<tr class="settings_line">
						<td>{"_USECAPTURE"|lang}</td>
						<td><select name="use_capture" width="200">{html_options output=$yesno_select|lang values=$yesno_values selected=$vars.use_capture}</select></td>
					</tr>
					<tr class="settings_line">
						<td>{"_AUTOPRUNE"|lang}</td>
						<td><select name="auto_prune" width="200" 
							onchange="document.getElementById('max_offences').disabled=(this.value==0);document.getElementById('max_offences_reason').disabled=(this.value==0);">
							{html_options output=$yesno_select|lang values=$yesno_values selected=$vars.auto_prune}
						</select></td>
					</tr>
				{if $vars.auto_prune==1}
					<tr class="settings_line">
						<td>{"_AUTOPRUNE_MAXOFFENCES"|lang}</td>
						<td><input type="text" size="5" name="max_offences" id="max_offences" value="{$vars.max_offences}" {if $vars.auto_prune==0}disabled="disabled"{/if}/>
						</td>
					</tr>
					<tr class="settings_line">
						<td>{"_AUTOPRUNE_MAXOFFENCES_REASON"|lang}</td>
						<td><input type="text" size="30" name="max_offences_reason" id="max_offences_reason" value="{$vars.max_offences_reason}" {if $vars.auto_prune==0}disabled="disabled"{/if}/>
						</td>
					</tr>
				{/if}
					<tr class="settings_line">
						<td>{"_COOKIENAME"|lang}</td>
						<td><input type="text" size="30" name="cookie" value="{$vars.cookie}" /></td>
					</tr>
				</table>
				<br />
				<table class="admin_list" border="1" width="50%" align="center">
					<tr class="htable">
						<td colspan="2">{"_VIEWSETTINGS"|lang}</td>
					</tr>
					<tr class="settings_line">
						<td width="50%">{"_BANNER"|lang}</td>
						<td><select name="banner" width="200">{html_options options=$banners selected=$vars.banner}</select></td>
					</tr>
					<tr class="settings_line">
						<td width="50%">{"_BANNERURL"|lang}</td>
						<td><input type="text" name="banner_url" size="30" value="{$vars.banner_url}"></select></td>
					</tr>
					<tr class="settings_line">
						<td>{"_DESIGN"|lang}</td>
						<td>{html_options name=design options=$designs selected=$vars.design}</td>
					</tr>
					<tr class="settings_line">
						<td>{"_STARTPAGE"|lang}</td>
						<td><select name="start_page" width="200">{html_options options=$start_pages selected=$vars.start_page}</select></td>
					</tr>
				</table>
				<br />
				<table class="admin_list" border="1" width="50%" align="center">
					<tr class="htable">
						<td colspan="2">{"_COMMENTSETTINGS"|lang}</td>
					</tr>
					<tr class="settings_line">
						<td width="50%">{"_USECOMMENTSYSTEM"|lang}</td>
						<td><select name="use_comment" width="200">{html_options output=$yesno_select|lang values=$yesno_values selected=$vars.use_comment}</select></td>
					</tr>
					{if $vars.use_comment==1}
					<tr class="settings_line">
						<td width="50%">{"_COMMENTUSERALLOWEDWRITE"|lang}</td>
						<td><select name="comment_all" width="200">{html_options output=$yesno_select|lang values=$yesno_values selected=$vars.comment_all}</select></td>
					</tr>
					{else}
						<input type="hidden" name="comment_all" value="{$vars.comment_all}" />
					{/if}
				</table>
				<br />
				<table class="admin_list" border="1" width="50%" align="center">
					<tr class="htable">
						<td colspan="2">{"_FILESETTINGS"|lang}</td>
					</tr>
					<tr class="settings_line">
						<td width="50%">{"_USEFILESYSTEM"|lang}</td>
						<td><select name="use_demo" width="200">{html_options output=$yesno_select|lang values=$yesno_values selected=$vars.use_demo}</select></td>
					</tr>
					{if $vars.use_demo==1}
					<tr class="settings_line">
						<td width="50%">{"_FILE_USERUPLOADALLOWED"|lang}</td>
						<td><select name="demo_all" width="200">{html_options output=$yesno_select|lang values=$yesno_values selected=$vars.demo_all}</select></td>
					</tr>
					<tr class="settings_line">
						<td>{"_MAXFILESIZE"|lang}</td>
						<td><input type="text" size="5" name="max_file_size" value="{$vars.max_file_size}" /> MB</td>
					</tr>
					<tr class="settings_line">
						<td>{"_FILE_ALLOWEDTYPES"|lang}</td>
						<td><input type="text" size="30" name="file_type" value="{$vars.file_type}" /></td>
					</tr>
					{else}
						<input type="hidden" name="demo_all" value="{$vars.demo_all}" />
						<input type="hidden" name="max_file_size" value="{$vars.max_file_size}" />
						<input type="hidden" name="file_type" value="{$vars.file_type}" />
					{/if}
				</table>
				<br />
				<table border="1" width="50%" align="center">
					<tr class="htable" colspan="20">
						<td colspan="2">{"_BANLISTSETTINGS"|lang}</td>
					</tr>
					<tr class="settings_line">
						<td width="50%">{"_BANSPERPAGE"|lang}</td>
						<td><input type="text" size="5" name="bans_per_page" value="{$vars.bans_per_page}" /></td>
					</tr>
					{if $vars.use_comment==1}
					<tr class="settings_line">
						<td>{"_SHOWCOMMENTSCOUNT"|lang}</td>
						<td><select name="show_comment_count" width="200">{html_options output=$yesno_select|lang values=$yesno_values selected=$vars.show_comment_count}</select></td>
					</tr>
					{else}
						<input type="hidden" name="show_comment_count" value="{$vars.show_comment_count}" />
					{/if}
					{if $vars.use_demo==1}
					<tr class="settings_line">
						<td>{"_SHOWFILESCOUNT"|lang}</td>
						<td><select name="show_demo_count" width="200">{html_options output=$yesno_select|lang values=$yesno_values selected=$vars.show_demo_count}</select></td>
					</tr>
					{else}
						<input type="hidden" name="show_demo_count" value="{$vars.show_demo_count}" />
					{/if}
					<tr class="settings_line">
						<td>{"_SHOWKICKCOUNT"|lang}</td>
						<td><select name="show_kick_count" width="200">{html_options output=$yesno_select|lang values=$yesno_values selected=$vars.show_kick_count}</select></td>
					</tr>
				</table>
				<div align="right"><input type="submit" class="button" name="save" value="{"_SAVE"|lang}" onclick="return confirm('{"_SAVESETTINGS"|lang}');" {if $smarty.session.websettings_edit !== "yes"}disabled{/if} /></div>
				</form>
			</table>
		{else}
			{"_NOACCESS"|lang} !!
		{/if}
		</td>
	</tr>
</table>