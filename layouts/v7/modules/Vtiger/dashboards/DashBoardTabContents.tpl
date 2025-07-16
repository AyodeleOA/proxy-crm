{strip}
<div class='dashBoardTabContainer'>
	{include file="dashboards/DashBoardHeader.tpl"|vtemplate_path:$MODULE_NAME DASHBOARDHEADER_TITLE=vtranslate($MODULE, $MODULE)}
	<br><div class="dashboardBanner"></div>
	<div class="dashBoardTabContents clearfix">
		<div class="gridster_{$TABID}">
			{assign var="ROWCOUNT" value=0}
			{assign var="COLCOUNT" value=0}
			{assign var=COLUMNS value=2}
			{assign var=ROW value=1}
			
			<div class="row">
				{foreach from=$WIDGETS item=WIDGET name=count}
					{assign var=WIDGETDOMID value=$WIDGET->get('linkid')}
					{if $WIDGET->getName() eq 'MiniList' || $WIDGET->getName() eq 'Notebook'}
						{assign var=WIDGETDOMID value=$WIDGET->get('linkid')|cat:'-':$WIDGET->get('widgetid')}
					{/if}

					{assign var=COLCOUNT value=($smarty.foreach.count.index % $COLUMNS)+1}
					{if $smarty.foreach.count.index % $COLUMNS == 0 && $smarty.foreach.count.index != 0}
						{assign var=ROWCOUNT value=$ROW+1}
					{else}
						{assign var=ROWCOUNT value=$ROW}
					{/if}

					{assign var=SIZEX value=$WIDGET->getSizeX()}
					{assign var=SIZEY value=$WIDGET->getSizeY()}
					{assign var=BOOTSTRAP_COL value=$SIZEX*6} {* assuming 2 columns (6 + 6 = 12) *}

					{if $WIDGETDOMID}
						<div class="col-md-{$BOOTSTRAP_COL} mb-4 dashboardWidgetWrapper">
							<div id="{$WIDGETDOMID}"
								data-row="{$WIDGET->getPositionRow($ROWCOUNT)}"
								data-col="{$WIDGET->getPositionCol($COLCOUNT)}"
								data-sizex="{$SIZEX}"
								data-sizey="{$SIZEY}"
								{if $WIDGET->get('position') eq ""} data-position="false"{/if}
								class="dashboardWidget dashboardWidget_{$smarty.foreach.count.index}"
								data-url="{$WIDGET->getUrl()}"
								data-mode="open"
								data-name="{$WIDGET->getName()}">
							</div>
						</div>
					{else}
						{assign var=CHARTWIDGETDOMID value=$WIDGET->get('reportid')}
						{assign var=WIDGETID value=$WIDGET->get('id')}
						<div class="col-md-{$BOOTSTRAP_COL} mb-4 dashboardWidgetWrapper">
							<div id="{$CHARTWIDGETDOMID}-{$WIDGETID}"
								data-row="{$WIDGET->getPositionRow($ROWCOUNT)}"
								data-col="{$WIDGET->getPositionCol($COLCOUNT)}"
								data-sizex="{$SIZEX}"
								data-sizey="{$SIZEY}"
								{if $WIDGET->get('position') eq ""} data-position="false"{/if}
								class="dashboardWidget dashboardWidget_{$smarty.foreach.count.index}"
								data-url="{$WIDGET->getUrl()}"
								data-mode="open"
								data-name="ChartReportWidget">
							</div>
						</div>
					{/if}
				{/foreach}
			</div>

			<input type="hidden" id=row value="{$ROWCOUNT}" />
			<input type="hidden" id=col value="{$COLCOUNT}" />
			<input type="hidden" id="userDateFormat" value="{$CURRENT_USER->get('date_format')}" />
		</div>
	</div>
</div>
{/strip}
