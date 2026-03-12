#include "CommandTabStand.hpp"

#include <soup/netIntrospectTask.hpp>
#include <soup/ObfusString.hpp>

#include "Auth.hpp"
#include "ColoadMgr.hpp"
#include "CommandInput.hpp"
#include "Commandbox.hpp"
#include "CommandDivider.hpp"
#include "CommandControllerKeyPointer.hpp"
#include "CommandLambdaAction.hpp"
#include "CommandLambdaActionScript.hpp"
#include "CommandLambdaSlider.hpp"
#include "CommandLambdaToggle.hpp"
#include "CommandReadonlyName.hpp"
#include "CommandReadonlyLink.hpp"
#include "CommandSlider.hpp"
#include "CommandSliderPointer.hpp"
#include "CommandTogglePointer.hpp"
#include "ControllerInputConfig.hpp"
#include "create_rainbow.hpp"
#include "create_colour_with_rainbow.hpp"
#include "Date.hpp"
#include "Exceptional.hpp"
#include "FiberPool.hpp"
#include "FileLogger.hpp"
#include "fwProfanityFilter.hpp"
#include "Hooking.hpp"
#include "JoinUtil.hpp"
#include "NotifyGrid.hpp"
#include "pointers.hpp"
#include "RageConnector.hpp"
#include "Renderer.hpp"
#include "ScriptGlobal.hpp"
#include "ScriptMgr.hpp"
#include "script_thread.hpp"
#include "TransitionHelper.hpp"
#include "TransitionState.hpp"
#include "Util.hpp"

#include "CommandPrimaryColour.hpp"
#include "CommandBackgroundColour.hpp"
#include "CommandFocusTextColour.hpp"
#include "CommandFocusRightTextColour.hpp"
#include "CommandFocusSpriteColour.hpp"
#include "CommandBlurTextColour.hpp"
#include "CommandBlurRightTextColour.hpp"
#include "CommandBlurSpriteColour.hpp"
#include "CommandMenuRainbow.hpp"
#include "CommandColourPointerDirectx.hpp"

#include "CommandHeader.hpp"
#include "CommandHeaderAnimationSpeed.hpp"

#include "CommandShowAddressbar.hpp"
#include "CommandRootName.hpp"
#include "CommandAddressSeparator.hpp"
#include "CommandAddressCurrentListOnly.hpp"
#include "CommandAddressbarWidthAffectedByScrollbar.hpp"
#include "CommandAddressbarWidthAffectedByColumns.hpp"
#include "CommandCursorPos.hpp"
#include "CommandCursorPosIncludesDividers.hpp"

#include "CommandTabs.hpp"
#include "CommandTabsPos.hpp"
#include "CommandTabsAlignment.hpp"
#include "CommandShowTabLicon.hpp"
#include "CommandShowTabName.hpp"
#include "CommandShowTabRicon.hpp"

#include "CommandScrollbar.hpp"

#include "CommandHelpPos.hpp"
#include "CommandInfoTextPadding.hpp"
#include "CommandHelpText.hpp"
#include "CommandSyntax.hpp"
#include "CommandShowSliderBehaviour.hpp"
#include "CommandShowNonuseronly.hpp"
#include "CommandShowCmdOwners.hpp"

#include "CommandListNotifySettings.hpp"

#include "CommandMenuHeight.hpp"
#include "CommandCursorPadding.hpp"
#include "CommandMenuPosition.hpp"
#include "CommandPreviewColourInSprite.hpp"
#include "CommandPreviewColourInList.hpp"

#include "CommandSetFont.hpp"
#include "CommandPresetFont.hpp"
#include "CommandListTextSettings.hpp"
#include "CommandTextBoxes.hpp"

#include "CommandLeftbound.hpp"
#include "CommandStreamproof.hpp"
#include "CommandEntityPreviews.hpp"

#include "CommandInputScheme.hpp"
#include "CommandQuickCtx.hpp"
#include "CommandMouse.hpp"
#include "CommandControllerSupport.hpp"

#include "CommandInfoPos.hpp"
#include "CommandInfoAlign.hpp"
#include "CommandInfoScale.hpp"
#include "CommandInfoDropShadow.hpp"

#include "CommandAutoProceedWarningsForCommands.hpp"
#include "CommandForceWarningRead.hpp"

#include "CommandPlayerScopePointer.hpp"

#include "CommandSuppressGenericResponsesCommandBox.hpp"
#include "CommandSuppressGenericResponsesHotkey.hpp"

#include "CommandLang.hpp"
#include "CommandButtonInstructions.hpp"

#include "CommandBackClose.hpp"
#include "CommandKeepCursorRoot.hpp"
#include "CommandKeepCursorBack.hpp"
#include "CommandAutoOpen.hpp"
#include "CommandDiscord.hpp"
#include "CommandHotkeyModkeyBehaviour.hpp"

#include "CommandProfiles.hpp"
#include "CommandLuaScripts.hpp"
#include "CommandAsiMods.hpp"
#include "CommandScripts.hpp"

#include "CommandChatGadget.hpp"
//#include "CommandSvmBpOptim.hpp"
#include "CommandShowNavMesh.hpp"
#include "CommandShowNavMeshNeighbors.hpp"
#include "CommandShowPedTasks.hpp"
#include "CommandApartments.hpp"
#include "CommandShowInt.hpp"
#include "CommandExportDisplayNames.hpp"
#include "CommandGallery.hpp"
#include "ComponentSavedata.hpp" // for unbrick

#include "CommandWeb.hpp"
#include "CommandSearchMenu.hpp"
#include "CommandListStarred.hpp"
#include "CommandListNonDefaults.hpp"
#include "CommandConsole.hpp"
#include "CommandDefault.hpp"
#include "CommandFeatureList.hpp"
#include "CommandListTutorial.hpp"
#include "CommandUnload.hpp"

#include "CommandListMillion.hpp"
#include "CommandRabbitHole.hpp"
#include "CommandSelfChatCommandsFriendsPerms.hpp"
#include "CommandNoExtraClear.hpp"
#include "mystackwalker.hpp"
//#include "CommandBanBypass.hpp"

#ifdef STAND_DEBUG
#include "CommandTestAdFilter.hpp"
#include "CommandCheatEngineForGlobals.hpp"
#include "CommandSavedata.hpp"
#include "CommandStress.hpp"
#include "CommandShimnlScriptHandlerMgr.hpp"
#include "CommandShimnlObjectMgr.hpp"
#include "CommandTriggerRac2.hpp"
#include "ComponentNetcode.hpp"
#include "using_model.hpp"
#endif

namespace Stand
{
#pragma warning(disable: 4717)
	static void overflow_the_stack(volatile unsigned int* param)
	{
		volatile unsigned int dummy[256];
		dummy[*param] %= 256;
		overflow_the_stack(&dummy[*param]);
	}

	CommandTabStand::CommandTabStand(CommandList* const parent)
		: CommandTab(parent, TAB_STAND, LIT("Stand"), { CMDNAME("tstand"), CMDNAME("stand") })
	{
	}

	void CommandTabStand::populate()
	{
		// Settings
		{
			auto settings = this->createChild<CommandList>(LOC("STTNGS"), { CMDNAME("settings") });

			// Appearance
			{
				auto appearance = settings->createChild<CommandList>(LOC("VIS"));

				// Colours
				CommandColourCustom* primaryColour;
				CommandColourCustom* bgColour;
				{
					auto colours = appearance->createChild<CommandList>(LOC("CLRS"));

					auto _ = colours->createChildWithBuilder<CommandPrimaryColour>();
					primaryColour = _;
					auto focusTextColour = colours->makeChild<CommandFocusTextColour>();
					auto focusRightTextColour = colours->makeChild<CommandFocusRightTextColour>(focusTextColour.get());
					auto focusSpriteColour = colours->makeChild<CommandFocusSpriteColour>(focusTextColour.get());
					primaryColour->createChild<CommandMenuRainbow>(primaryColour, focusTextColour.get(), focusRightTextColour.get(), focusSpriteColour.get());
					colours->children.emplace_back(std::move(focusTextColour));
					colours->children.emplace_back(std::move(focusRightTextColour));
					colours->children.emplace_back(std::move(focusSpriteColour));
					bgColour = colours->createChild<CommandBackgroundColour>();
					auto blurTextColour = colours->createChild<CommandBlurTextColour>();
					colours->createChild<CommandBlurRightTextColour>(blurTextColour);
					colours->createChild<CommandBlurSpriteColour>(blurTextColour);
					create_rainbow(colours->createChild<CommandColourPointerDirectx>(&g_renderer.hudColour, LOC("CLRHU"), { CMDNAME("hud") }, primaryColour));
					create_rainbow(colours->createChild<CommandColourPointerDirectx>(&g_renderer.arColour, LOC("CLRAR"), { CMDNAME("ar") }, primaryColour));
					create_rainbow(colours->createChild<CommandColourPointerDirectx>(&g_renderer.minigameColour, LOC("CLRMGME"), { CMDNAME("minigame") }, primaryColour));
				}

				appearance->createChild<CommandMenuPosition>();

				// Header
				{
					auto header = appearance->createChild<CommandList>(LOC("HDR"));

					header->createChild<CommandHeader>();
					header->createChild<CommandHeaderAnimationSpeed>();
					header->createChild<CommandTogglePointer>(&g_renderer.header_bgblur, LOC("BGBLR"), {}, LOC("HDR_BGBLR_H"));
					header->createChild<CommandLambdaAction>(LOC("OPNFLD"), {}, NOLABEL, [this](Click&)
					{
						g_gui.shellExecute(std::wstring(_wgetenv(L"appdata")).append(LR"(\Stand\Headers\)").c_str());
					});
				}

				// Address Bar
				{
					auto addressbar = appearance->createChild<CommandList>(LOC("ADDRBAR"));

					addressbar->createChild<CommandShowAddressbar>();
					addressbar->createChild<CommandRootName>();
					addressbar->createChild<CommandAddressSeparator>();
					addressbar->createChild<CommandAddressCurrentListOnly>();
					addressbar->createChild<CommandAddressbarWidthAffectedByScrollbar>();
					addressbar->createChild<CommandAddressbarWidthAffectedByColumns>();
					addressbar->createChild<CommandLambdaSlider<CommandSlider>>(LOC("HHT"), CMDNAMES("addressbarheight"), NOLABEL, 0, SHRT_MAX, 24, 1, [](int value, Click& click)
					{
						g_menu_grid.updateSetting([value]
						{
							g_renderer.addressbar_height = value;
						});
					});
					addressbar->createChild<CommandListTextSettings>(LOC("TEXT"), { CMDNAME("addressbartext") }, &g_menu_grid.addressbar_text);
					addressbar->createChild<CommandCursorPos>();
					addressbar->createChild<CommandCursorPosIncludesDividers>();
				}

				// Cursor
				{
					auto cursor = appearance->createChild<CommandList>(LOC("CRS"));

					cursor->createChild<CommandCursorPadding>();
					cursor->createChild<CommandDivider>(LOC("BRD"));
					cursor->createChild<CommandLambdaSlider<CommandSlider>>(LOC("WDT"), CMDNAMES("cursorborderwidth"), NOLABEL, 0, SHRT_MAX, 0, 1, [](int value, Click& click)
					{
						g_renderer.cursor_border_width = value;
					});
					cursor->createChild<CommandTogglePointer>(&g_renderer.cursor_border_rounded, LOC("RNDD"), CMDNAMES("cursorborderrounded", "cursorborderounded"));
					create_colour_with_rainbow(cursor, &g_renderer.cursor_border_colour, { CMDNAME("cursorborder") });
				}

				// Tabs
				{
					auto tabs = appearance->createChild<CommandList>(LOC("TABS"));

					auto show_tabs = tabs->createChild<CommandTabs>();
					tabs->createChild<CommandLambdaSlider<CommandSlider>>(LOC("WDT"), { CMDNAME("tabswidth") }, NOLABEL, 1, SHRT_MAX, 112, 1, [](int value, Click& click)
					{
						g_menu_grid.updateSetting([value]
						{
							g_renderer.tabs_width = value;
						});
					});
					tabs->createChild<CommandLambdaSlider<CommandSlider>>(LOC("HHT"), { CMDNAME("tabsheight") }, NOLABEL, 1, SHRT_MAX, 32, 1, [](int value, Click& click)
					{
						g_menu_grid.updateSetting([value]
						{
							g_renderer.tabs_height = value;
						});
					});
					show_tabs->pos = tabs->createChild<CommandTabsPos>(show_tabs);
					tabs->createChild<CommandListTextSettings>(LOC("TEXT"), { CMDNAME("tabstext") }, &g_renderer.tabs_text);
					tabs->createChild<CommandTabsAlignment>();
					tabs->createChild<CommandShowTabLicon>();
					tabs->createChild<CommandShowTabName>();
					tabs->createChild<CommandShowTabRicon>();
					tabs->createChild<CommandTogglePointer>(&g_renderer.tab_textures_colourable, LOC("ICUTXTCLR"));
				}

				// Scrollbar
				{
					auto scrollbar = appearance->createChild<CommandList>(LOC("SCRLBR"));

					scrollbar->createChild<CommandScrollbar>();
					scrollbar->createChild<CommandLambdaSlider<CommandSlider>>(LOC("WDT"), CMDNAMES("scrollbarwidth"), NOLABEL, 1, SHRT_MAX, 6, 1, [](int value, Click& click)
					{
						g_menu_grid.updateSetting([value]
						{
							g_menu_grid.scrollbar_width = value;
						});
					});
				}

				// Command Info Text
				{
					auto cmd_info_text = appearance->createChild<CommandList>(LOC("CMDINFOTXT"));

					cmd_info_text->createChild<CommandHelpPos>();
					cmd_info_text->createChild<CommandLambdaSlider<CommandSlider>>(LOC("WDT"), CMDNAMES("infowidth"), NOLABEL, 1, SHRT_MAX, 300, 1, [](int value, Click& click)
					{
						g_menu_grid.updateSetting([value]
						{
							g_menu_grid.info_width = value;
						});
					});
					cmd_info_text->createChild<CommandInfoTextPadding>();
					cmd_info_text->createChild<CommandHelpText>();
					cmd_info_text->createChild<CommandSyntax>();
					cmd_info_text->createChild<CommandShowSliderBehaviour>();
					cmd_info_text->createChild<CommandShowNonuseronly>();
					cmd_info_text->createChild<CommandShowCmdOwners>();
				}

				// Notifications
				{
					appearance->createChild<CommandListNotifySettings>(primaryColour, bgColour);
				}

				// Commands
				{
					auto commands = appearance->createChild<CommandList>(LOC("CMDS"));

					commands->createChild<CommandListTextSettings>(LOC("TEXT"), { CMDNAME("commandtext") }, &g_renderer.command_text);

					// Colour Commands
					{
						auto colour_commands = commands->createChild<CommandList>(LOC("CLRCMDS"));

						colour_commands->createChild<CommandPreviewColourInSprite>();
						colour_commands->createChild<CommandPreviewColourInList>();
					}

					// Prefill Current Value For Command Box
					{
						auto prefill_value = commands->createChild<CommandList>(LOC("PRFILVAL"));

						prefill_value->createChild<CommandTogglePointer>(&CommandSlider::prefill_value, LOC("CMDTP_S"));
						prefill_value->createChild<CommandTogglePointer>(&CommandInput::prefill_value, LOC("CMDTP_AV"));
					}

					// Number Sliders
					{
						auto number_sliders = commands->createChild<CommandList>(LOC("CMDTP_S_N"));

						number_sliders->createChild<CommandTogglePointer>(&CommandSlider::selectable_na, LOC("SELNA"), { CMDNAME("selectablenasliders") });
						number_sliders->createChild<CommandLambdaToggle>(LOC("RHTBNDVAL"), { CMDNAME("slidersrightbound") }, [](bool on, Click& click)
						{
							g_menu_grid.updateSetting([on]
							{
								g_menu_grid.number_sliders_rightbound_values = on;
							});
						}, true);
					}

					commands->createChild<CommandTogglePointer>(&CommandDivider::selectable, LOC("SELDIV"), CMDNAMES("selectabledividers"));
				}

				// Border
				{
					auto border = appearance->createChild<CommandList>(LOC("BRD"));

					border->createChild<CommandLambdaSlider<CommandSlider>>(LOC("WDT"), CMDNAMES("borderwidth"), NOLABEL, 0, SHRT_MAX, 0, 1, [](int value, Click& click)
					{
						g_menu_grid.updateSetting([value]
						{
							g_menu_grid.border_width = value;
						});
					});
					border->createChild<CommandLambdaToggle>(LOC("RNDD"), CMDNAMES("borderrounded", "borderounded"), [](bool on, Click& click)
					{
						g_menu_grid.updateSetting([on]
						{
							g_menu_grid.border_rounded = on;
						});
					});
					create_colour_with_rainbow(
						border,
						&g_menu_grid.border_colour,
						{ CMDNAME("border") }
					);
				}

				appearance->createChild<CommandLambdaSlider<CommandSlider>>(LOC("MAXCLMNS"), { CMDNAME("columns") }, NOLABEL, 1, 50, 1, 1, [](int value, Click& click)
				{
					g_menu_grid.updateSetting([value, thread_context{ click.thread_context }]
					{
						g_gui.command_columns = value;
						g_gui.getCurrentMenuFocus()->focusInParent(thread_context);
					});
				});
				appearance->createChild<CommandMenuHeight>();
				appearance->createChild<CommandLambdaSlider<CommandSlider>>(LOC("LSTWDT"), { CMDNAME("listwidth"), CMDNAME("menuwidth") }, NOLABEL, 0, SHRT_MAX, 450, 10, [](int value, Click& click)
				{
					g_menu_grid.updateSetting([value]
					{
						g_renderer.command_width = value;
					});
				});
				appearance->createChild<CommandLambdaSlider<CommandSlider>>(LOC("LSTHHT"), { CMDNAME("listheight") }, NOLABEL, 0, SHRT_MAX, 32, 1, [](int value, Click& click)
				{
					g_menu_grid.updateSetting([value]
					{
						g_renderer.command_height = value;
					});
				});
				appearance->createChild<CommandLambdaSlider<CommandSlider>>(LOC("SPCSZE"), { CMDNAME("spacersize") }, NOLABEL, 0, SHRT_MAX, 3, 1, [](int value, Click& click)
				{
					g_menu_grid.updateSetting([value]
					{
						g_menu_grid.spacer_size = value;
					});
				});
				appearance->createChild<CommandLambdaSlider<CommandSlider>>(LOC("LERP"), { CMDNAME("smoothscroll") }, NOLABEL, 0, 1000, 70, 10, [](int value, Click& click)
				{
					g_gui.lerp = value;
					if (value == 0)
					{
						g_gui.lerpStop();
					}
				});
				appearance->createChild<CommandLambdaSlider<CommandSlider>>(LOC("BGBLR"), CMDNAMES("blur", "bgblur", "backgroundblur"), LOC("BGBLR_H"), 0, 100, 4, 1, [](int value, Click& click)
				{
					g_renderer.background_blur = value;
				});

				appearance->createChild<CommandLambdaAction>(LOC("OPNTHME"), CMDNAMES(), LOC("OPNTHME_H"), [](Click& click)
				{
					g_gui.shellExecute(Renderer::getThemePath().c_str());
				});

				// Font & Text
				{
					auto text = appearance->createChild<CommandList>(LOC("STTNGS_TXT"));

					text->createChild<CommandSetFont>();
					text->createChild<CommandPresetFont>();
					text->createChild<CommandLambdaAction>(LOC("RLDFNT"), CMDNAMES("reloadfont"), NOLABEL, [](Click& click)
					{
						click.stopInputIfAllowed();
						g_renderer.loadUserFont();
					});
					text->createChild<CommandListTextSettings>(LOC("CMBINTXT"), { CMDNAME("commandboxinput") }, &g_renderer.commandbox_input_text);
					text->createChild<CommandListTextSettings>(LOC("TXT_S"), { CMDNAME("smalltext") }, &g_renderer.small_text);
					text->createChild<CommandTextBoxes>();
				}

				// Textures
				{
					auto sprites = appearance->createChild<CommandList>(LOC("SPRS"));

					sprites->createChild<CommandLeftbound>();
					sprites->createChild<CommandLambdaAction>(LOC("RLDSPR"), CMDNAMES("reloadtextures", "reloadsprites"), NOLABEL, [](Click& click)
					{
						click.stopInputIfAllowed();
						g_renderer.reloadTextures(Renderer::getThemePath());
					});
				}

				appearance->createChild<CommandStreamproof>();
				appearance->createChild<CommandEntityPreviews>();
			}

			// Input
			{
				auto input = settings->createChild<CommandList>(LOC("IPT"));

				input->createChild<CommandInputScheme>();
				input->createChild<CommandQuickCtx>();

				// Mouse Support
				{
					auto mouse = input->createChild<CommandList>(LOC("MOUSE"));

					mouse->createChild<CommandMouse>();
					mouse->createChild<CommandTogglePointer>(&g_gui.mouse_mode_set_focus, LOC("MOUSEFOCUS"));
				}

				input->createChild<CommandControllerSupport>();

				// Controller Input Scheme
				{
					auto* const controller_input_scheme = input->createChild<CommandList>(LOC("CTRLLRSCHM"));

					controller_input_scheme->createChild<CommandControllerKeyPointer>(&ControllerInputConfig::menu_open_close_1, LOC("B_OC_1"));
					controller_input_scheme->createChild<CommandControllerKeyPointer>(&ControllerInputConfig::menu_open_close_2, LOC("B_OC_2"));
					controller_input_scheme->createChild<CommandControllerKeyPointer>(&ControllerInputConfig::menu_root_up, LOC("B_RU"));
					controller_input_scheme->createChild<CommandControllerKeyPointer>(&ControllerInputConfig::menu_root_down, LOC("B_RD"));
					controller_input_scheme->createChild<CommandControllerKeyPointer>(&ControllerInputConfig::menu_up, LOC("B_MU"));
					controller_input_scheme->createChild<CommandControllerKeyPointer>(&ControllerInputConfig::menu_down, LOC("B_MD"));
					controller_input_scheme->createChild<CommandControllerKeyPointer>(&ControllerInputConfig::menu_left, LOC("B_ML"));
					controller_input_scheme->createChild<CommandControllerKeyPointer>(&ControllerInputConfig::menu_right, LOC("B_MR"));
					controller_input_scheme->createChild<CommandControllerKeyPointer>(&ControllerInputConfig::menu_click, LOC("B_MC"));
					controller_input_scheme->createChild<CommandControllerKeyPointer>(&ControllerInputConfig::menu_back, LOC("B_MB"));
					controller_input_scheme->createChild<CommandControllerKeyPointer>(&ControllerInputConfig::menu_context, LOC("B_CTX"));
					controller_input_scheme->createChild<CommandControllerKeyPointer>(&ControllerInputConfig::command_box, LOC("B_CB"), true);
				}

				input->createChild<CommandTogglePointer>(&g_gui.back_resets_cursor, LOC("BKRST"), CMDNAMES_OBF("backreset"), LOC("BKRST_H"));
				input->createChild<CommandBackClose>();
				input->createChild<CommandTogglePointer>(&g_gui.wraparound_holding_pause, LOC("WRPINTHLD"));

				// Keep Cursor When Revisiting
				{
					auto keepcursor = input->createChild<CommandList>(LOC("KPCRSR"));

					keepcursor->createChild<CommandKeepCursorRoot>();
					keepcursor->createChild<CommandKeepCursorBack>();
					keepcursor->createChild<CommandTogglePointer>(&g_gui.keep_cursor_reduced_for_huge_lists, LOC("KPCRSR_L_RDC"));
				}

				input->createChild<CommandSliderPointer<CommandSlider, time_t>>(LOC("KSPD"), CMDNAMES("keyrepeatinterval"), LOC("KSPD_H"), &g_gui.input_speed, 0, 10000);
				input->createChild<CommandSliderPointer<CommandSlider, time_t>>(LOC("KHSPD"), CMDNAMES("keylongrepeatinterval"), LOC("KHSPD_H"), &g_gui.input_speed_holding, 0, 10000);
				input->createChild<CommandSliderPointer<CommandSlider, time_t>>(LOC("TKSPD"), CMDNAMES("tabrepeatinterval"), NOLABEL, &g_gui.tab_input_speed, 0, 10000);

				input->createChild<CommandTogglePointer>(&g_gui.hotkeys_disabled, LOC("DHK"), { CMDNAME("disablehotkeys") });
				input->createChild<CommandHotkeyModkeyBehaviour>();
			}

			// Info Text
			{
				auto info_text = settings->createChild<CommandList>(LOC("INFOTXT"));

				info_text->createChild<CommandInfoPos>();
				info_text->createChild<CommandInfoAlign>();
				info_text->createChild<CommandInfoScale>();
				info_text->createChild<CommandInfoDropShadow>();
			}

			// Warnings
			{
				auto* warnings = settings->createChild<CommandList>(LOC("WARNS"));

				// Automatically Proceed On Warnings
				{
					auto auto_proceed_warnings = warnings->createChild<CommandList>(LOC("WARNAUTOPROC"));

					auto_proceed_warnings->createChild<CommandAutoProceedWarningsForCommands>();
					auto_proceed_warnings->createChild<CommandTogglePointer>(&Click::auto_proceed_warnings_for_hotkeys, LOC("HOTKEY"), { CMDNAME("hotkeysskipwarnings"), CMDNAME("hotkeyskipswarnings"), CMDNAME("hotkeyskipwarnings") });
				}
				warnings->createChild<CommandForceWarningRead>();
				warnings->createChild<CommandTogglePointer>(&g_gui.skip_accepted_warnings, LOC("WARNSKIPPROC"), { CMDNAME("skiprepeatwarnings") });
			}

			// Hide Information
			{
				auto hide = settings->createChild<CommandList>(LOC("HDENFO"), {}, LOC("HDENFO_H"));

				hide->createChild<CommandPlayerScopePointer>(&AbstractPlayer::hide_unfiltered_name, LOC("HDENME"), {}, LOC("HDENME_H"));
				hide->createChild<CommandPlayerScopePointer>(&AbstractPlayer::hide_rid, LOC("HDERID"));
				hide->createChild<CommandPlayerScopePointer>(&AbstractPlayer::hide_ip, LOC("HDEIP"));
				hide->createChild<CommandPlayerScopePointer>(&AbstractPlayer::hide_geoip, LOC("HDEGIP"));
			}

			// Notifications
			{
				auto notifs = settings->createChild<CommandList>(LOC("NOTFS"));

				// Suppress Generic Responses
				{
					auto suppress_generic_responses = notifs->createChild<CommandList>(LOC("SUPPGEN"), {}, LOC("SUPPGEN_H"));

					suppress_generic_responses->createChild<CommandSuppressGenericResponsesCommandBox>();
					suppress_generic_responses->createChild<CommandSuppressGenericResponsesHotkey>();
				}
			}

			// Command Box
			{
				auto command_box = settings->createChild<CommandList>(LOC("B_CB"));

				command_box->createChild<CommandSliderPointer<CommandSlider, size_t>>(LOC("MAXSHWMCHCMD"), CMDNAMES("cbmaxshownmatching"), NOLABEL, &g_commandbox_grid.max_shown_matching_commands, 1, 1000);
				command_box->createChild<CommandTogglePointer>(&g_commandbox.keep_content_on_close, LOC("KPDRFCLS"), CMDNAMES("cbkeepdraft"));
			}

			// Session Joining
			{
				auto joining = settings->createChild<CommandList>(LOC("SESSJNG"));

				joining->createChild<CommandTogglePointer>(&JoinUtil::auto_switch_targeting, LOC("AUTOCHNGTRGT"), {}, LOC("AUTOCHNGTRGT_H"));
#if I_CAN_SPY
				joining->createChild<CommandTogglePointer>(&JoinUtil::rejectblock, LOC("REJBLK"), {}, LOC("REJBLK_H"));
#endif
				//joining->createChild<CommandTogglePointer>(&RageConnector::use_speculative_session_preconnections, LOC("SPCUCON"), {}, LOC("SPCUCON_H"));
			}

			settings->createChild<CommandLang>();
			settings->createChild<CommandButtonInstructions>();
			settings->createChild<CommandAutoOpen>();
			settings->createChild<CommandDiscord>();
			settings->createChild<CommandTogglePointer>(&g_gui.sound, LOC("SFX"), { CMDNAME("sfx") });
			settings->createChild<CommandTogglePointer>(&g_gui.menu_navigation_reminders, LOC("MNUNVRMD"));
		}

		if (g_gui.root_state != GUI_FREEONLINE)
		{
			this->createChildWithBuilder<CommandProfiles>();
			this->createChildWithBuilder<CommandLuaScripts>();
			this->createChildWithBuilder<CommandAsiMods>();
			this->createChildWithBuilder<CommandScripts>();

			// Experiments
			{
				auto experiments = this->createChild<CommandList>(LOC("TESTS"));

#ifdef STAND_DEBUG
				// Debug Build Shit
				{
					auto* debug = experiments->createChild<CommandList>(LIT("Debug Build Shit"), {}, NOLABEL, CMDFLAGS_LIST | CMDFLAG_FEATURELIST_SKIP);

					debug->createChild<CommandCheatEngineForGlobals>();
					debug->createChild<CommandSavedata>();
					debug->createChild<CommandStress>();
					debug->createChild<CommandTestAdFilter>();

					// Shim NetLogger
					{
						auto shimnl = debug->createChild<CommandList>(LIT("Shim NetLogger"));

						shimnl->createChild<CommandShimnlScriptHandlerMgr>();
						shimnl->createChild<CommandShimnlObjectMgr>();
					}

#if HTTP_HOOK
					debug->createChild<CommandTogglePointer>(&g_hooking.log_http_requests, LIT("Log HTTP Requests"));
#endif
					debug->createChild<CommandTogglePointer>(&g_hooking.log_net_event_send, LIT("Log Net Event Send"));
					debug->createChild<CommandTogglePointer>(&g_hooking.log_packet_write, LIT("Log Packet Write"));
					debug->createChild<CommandTogglePointer>(&g_comp_netcode.log_packet_receive, LIT("Log Packet Receive"));
					debug->createChild<CommandTogglePointer>(&g_hooking.log_metrics, LIT("Log Metrics"));
					debug->createChild<CommandTogglePointer>(&g_hooking.log_presence_event_scdll, LIT("Log Presence Event (SC DLL)"));
					debug->createChild<CommandTogglePointer>(&g_hooking.log_presence_event_game, LIT("Log Presence Event (Game)"));
					debug->createChild<CommandLambdaAction>(LIT("Generate Stack Trace"), {}, NOLABEL, [](Click& click)
					{
						g_logger.log("Your stack trace:");
						GENERATE_STACK_TRACE;
					}, CMDFLAG_TEMPORARY);
					debug->createChild<CommandLambdaAction>(LIT("Throw C++ Exception"), {}, NOLABEL, [](Click& click)
					{
						__try
						{
							(std::function<void()>{})();
						}
						__EXCEPTIONAL()
						{
						}
					}, CMDFLAG_TEMPORARY);
					debug->createChild<CommandLambdaAction>(LIT("Throw EXCEPTION_ACCESS_VIOLATION"), {}, NOLABEL, [](Click& click)
					{
						__try
						{
							((void(*)())nullptr)();
						}
						__EXCEPTIONAL()
						{
						}
					}, CMDFLAG_TEMPORARY);
					debug->createChild<CommandLambdaAction>(LIT("Throw EXCEPTION_BREAKPOINT"), {}, NOLABEL, [](Click& click)
					{
						__try
						{
							__debugbreak();
						}
						__EXCEPTIONAL()
						{
						}
					}, CMDFLAG_TEMPORARY);
					debug->createChild<CommandLambdaAction>(LIT("Throw EXCEPTION_STACK_OVERFLOW"), {}, NOLABEL, [](Click& click)
					{
						__try
						{
							unsigned int initial = 3;
							overflow_the_stack(&initial);
						}
						__EXCEPTIONAL()
						{
							_resetstkoflw();
						}
					}, CMDFLAG_TEMPORARY);
					debug->createChild<CommandLambdaAction>(LIT("Uncaught nullptr access"), {}, NOLABEL, [](Click& click)
					{
						Exceptional::createManagedThread([]
						{
							*(int*)nullptr = 0;
						});
					});
					debug->createChild<CommandLambdaAction>(LIT("Uncaught nullptr call"), {}, NOLABEL, [](Click& click)
					{
						Exceptional::createManagedThread([]
						{
							((void(*)())nullptr)();
						});
					});
					debug->createChild<CommandLambdaAction>(LIT("Deinit StackWalker"), CMDNAMES("releasepdb"), NOLABEL, [](Click&)
					{
						g_mystackwalker_inst.reset();
					});
					debug->createChild<CommandLambdaAction>(LIT("Spam prop_wallchunk_01"), {}, NOLABEL, [](Click&)
					{
						FiberPool::queueJob([]
						{
							for (uint16_t i = 0; i != 1000; ++i)
							{
								auto ent = Util::createObject(ATSTRINGHASH("prop_wallchunk_01"), g_player_ent.getPos(), false);
								OBJECT::BREAK_OBJECT_FRAGMENT_CHILD(ent, 1, false);
								Script::current()->yield();
							}
						});
					});
					debug->createChild<CommandLambdaAction>(LIT("Spam w_lr_rpg_rocket"), {}, NOLABEL, [](Click&)
					{
						FiberPool::queueJob([]
						{
							for (uint16_t i = 0; i != 1000; ++i)
							{
								auto ent = Util::createObject(ATSTRINGHASH("w_lr_rpg_rocket"), g_player_ent.getPos(), false);
								Script::current()->yield();
							}
						});
					});
					debug->createChild<CommandLambdaAction>(LIT("Spam prop_fish_slice_01"), {}, NOLABEL, [](Click&)
					{
						FiberPool::queueJob([]
						{
							for (uint16_t i = 0; i != 1000; ++i)
							{
								auto ent = Util::createObject(ATSTRINGHASH("prop_fish_slice_01"), g_player_ent.getPos(), false);
								Script::current()->yield();
							}
						});
					});
					debug->createChild<CommandLambdaAction>(LIT("Spam vehicles"), {}, NOLABEL, [](Click&)
					{
						FiberPool::queueJob([]
						{
							using_model(ATSTRINGHASH("ruffian"), []
							{
								for (uint16_t i = 0; i != 1000; ++i)
								{
									auto ent = Util::createVehicle(ATSTRINGHASH("ruffian"), g_player_ent.getPos(), 0.0f, false);
									Script::current()->yield();
								}
							});
						});
					});
					debug->createChild<CommandLambdaAction>(LIT("Spam peds"), {}, NOLABEL, [](Click&)
					{
						FiberPool::queueJob([]
						{
							using_model(ATSTRINGHASH("ig_abigail"), []
							{
								for (uint16_t i = 0; i != 1000; ++i)
								{
									auto ent = Util::createPed(0, ATSTRINGHASH("ig_abigail"), g_player_ent.getPos(), 0.0f, false);
									Script::current()->yield();
								}
							});
						});
					});
#if !SSW_CALLSTACK_ONLY
					debug->createChild<CommandLambdaAction>(LIT("Force Next Stack Trace To Be Proper"), {}, NOLABEL, [](Click& click)
					{
						MyStackWalker::callback_may_be_corrupted = true;
					}, CMDFLAG_TEMPORARY);
#endif
#if USE_ENTRYPOINT_DETOURS
					debug->createChild<CommandLambdaAction>(LIT("Log Entrypoints (Dirty)"), {}, NOLABEL, [](Click& click)
#else
					debug->createChild<CommandLambdaAction>(LIT("Log Entrypoints"), {}, NOLABEL, [](Click& click)
#endif
					{
						g_logger.empty();
						g_logger.enterBlockMode();
						for (auto const& entry : g_script_mgr.handler_map)
						{
							g_logger.log(std::string("0x").append(Util::to_padded_hex_string(entry.first.getHash())).append(" -> ").append(Util::to_padded_hex_string(reinterpret_cast<uint64_t>(TO_IDA_ADDR(entry.second)))));
						}
						g_logger.leaveBlockMode();
						click.setResponse(LIT("Your Log.txt has been populated."));
					}, CMDFLAG_TEMPORARY);
					debug->createChild<CommandTriggerRac2>();
				}
#endif
				experiments->createChild<CommandLambdaAction>(LIT_OBF("Run Network Diagnostics"), {}, NOLABEL, [](Click& click)
				{
					static bool running_diagnostics = false;
					if (!running_diagnostics)
					{
						running_diagnostics = true;
						click.setResponse(LIT_OBF("Running network diagnostics..."));
						Exceptional::createManagedExceptionalThread("Network Diagnostics", []
						{
							soup::netIntrospectTask task;
							task.run();
							g_logger.log(soup::ObfusString("---- START OF NETWORK DIAGNOSTICS ----").str());
							g_logger.enterBlockMode();
							g_logger.log(task.getDiagnosticsString());
							g_logger.leaveBlockMode();
							g_logger.log(soup::ObfusString("---- END OF NETWORK DIAGNOSTICS ----").str());
							Util::toast(LIT_OBF("Network diagnostic results have been written to your Log.txt."));
							running_diagnostics = false;
						});
					}
				});
				experiments->createChild<CommandLambdaAction>(LIT_OBF("Deactivate Profile"), CMDNAMES("deactivateprofile"), NOLABEL, [](Click&)
				{
					g_gui.active_profile.reset();
				});
				experiments->createChild<CommandLambdaAction>(LIT_OBF("Unbrick Account"), {}, NOLABEL, [](Click&)
				{
					FiberPool::queueJob([]
					{
						if (g_comp_savedata.ignore_dirty_read)
						{
							return;
						}
						g_comp_savedata.ignore_dirty_read = true;
						FiberPool::queueJob([]
						{
							while (g_comp_savedata.ignore_dirty_read)
							{
								if (ScriptGlobal(GLOBAL_CHAR_SLOT).get<int>() >= 2)
								{
									ScriptGlobal(GLOBAL_CHAR_SLOT).set<int>(0);
								}
								STATS::STAT_CLEAR_DIRTY_READ_DETECTED();
								Script::current()->yield();
							}
						});
						Script::current()->yield();
						TransitionHelper::doTransition(INVITE_ONLY);
						g_comp_savedata.ignore_dirty_read = false;
					});
				});
				experiments->createChild<CommandTogglePointer>(&g_hooking.org_spy, LIT_OBF("Read All Org Chats"), {}, LIT_OBF("Players in an org will see you under their org in the player list, and if the script host has an org, creating an org of your own will not work flawlessly."));
				experiments->createChild<CommandChatGadget>();
				experiments->createChild<CommandLambdaActionScript>(LIT_OBF("Been Playing Since The Game Came Out!"), {}, LIT_OBF("Irreversibly changes various stats related to your onboarding date. This doesn't improve or worsen safety as far as we know."), [](const Click& click)
				{
					Date date{ 2013, 9, 17, 20, 30, 0, 0 };
					STATS::STAT_SET_DATE(ATSTRINGHASH("MP0_CHAR_DATE_CREATED"), (Any*)&date, 7, TRUE);
					STATS::STAT_SET_DATE(ATSTRINGHASH("MP1_CHAR_DATE_CREATED"), (Any*)&date, 7, TRUE);
					STATS::STAT_SET_DATE(ATSTRINGHASH("MP0_CHAR_DATE_RANKUP"), (Any*)&date, 7, TRUE);
					STATS::STAT_SET_DATE(ATSTRINGHASH("MP1_CHAR_DATE_RANKUP"), (Any*)&date, 7, TRUE);
					STATS::STAT_SET_DATE(ATSTRINGHASH("MPPLY_STARTED_MP"), (Any*)&date, 7, TRUE);
					STATS::STAT_SET_DATE(ATSTRINGHASH("MPPLY_NON_CHEATER_CASH"), (Any*)&date, 7, TRUE);
					STATS::STAT_SET_DATE(ATSTRINGHASH("MP0_CHAR_LAST_PLAY_TIME"), (Any*)&date, 7, TRUE);
					STATS::STAT_SET_DATE(ATSTRINGHASH("MP1_CHAR_LAST_PLAY_TIME"), (Any*)&date, 7, TRUE);
					STATS::STAT_SET_INT(ATSTRINGHASH("MPPLY_TOTAL_TIME_IN_LOBBY"), INT_MAX, TRUE);
					STATS::STAT_SET_INT(ATSTRINGHASH("MP0_CLOUD_TIME_CHAR_CREATED"), 1379449800, TRUE);
					STATS::STAT_SET_INT(ATSTRINGHASH("MP1_CLOUD_TIME_CHAR_CREATED"), 1379449800, TRUE);
					STATS::STAT_SET_INT(ATSTRINGHASH("MP0_PS_TIME_CHAR_CREATED"), 1379449800, TRUE);
					STATS::STAT_SET_INT(ATSTRINGHASH("MP1_PS_TIME_CHAR_CREATED"), 1379449800, TRUE);
					STATS::STAT_SET_INT(ATSTRINGHASH("MPPLY_TOTAL_TIME_SPENT_FREEMODE"), INT_MAX, TRUE);
					STATS::STAT_SET_INT(ATSTRINGHASH("LEADERBOARD_PLAYING_TIME"), INT_MAX, TRUE);
					STATS::STAT_SET_INT(ATSTRINGHASH("MP0_TOTAL_PLAYING_TIME"), INT_MAX, TRUE);
					STATS::STAT_SET_INT(ATSTRINGHASH("MP1_TOTAL_PLAYING_TIME"), INT_MAX, TRUE);
					STATS::STAT_SET_INT(ATSTRINGHASH("MP_PLAYING_TIME_NEW"), INT_MAX, TRUE);
					STATS::STAT_SET_INT(ATSTRINGHASH("MP_PLAYING_TIME"), INT_MAX, TRUE);
					STATS::STAT_SET_INT(ATSTRINGHASH("MP0_LONGEST_PLAYING_TIME"), INT_MAX, TRUE);
					STATS::STAT_SET_INT(ATSTRINGHASH("MP1_LONGEST_PLAYING_TIME"), INT_MAX, TRUE);
				});
				//experiments->createChild<CommandSvmBpOptim>();
				experiments->createChild<CommandShowNavMesh>();
				experiments->createChild<CommandShowNavMeshNeighbors>();
				experiments->createChild<CommandShowPedTasks>();
				experiments->createChild<CommandApartments>();
				experiments->createChild<CommandShowInt>();
				experiments->createChild<CommandLambdaAction>(LIT("Log Profanities"), CMDNAMES("dumpprofanities", "dumprofanities", "logprofanities"), LIT("Best enjoyed in conjuction with a lapdance at the Vanilla Unicorn."), [](Click& click)
				{
					if (pointers::profanity_filter)
					{
						g_logger.log("PROFANITIES");
						g_logger.enterBlockMode();
						for (const auto& term : pointers::profanity_filter->m_profaneTerms)
						{
							g_logger.log(term);
						}
						g_logger.leaveBlockMode();
						click.setResponse(LIT("Your Log.txt just gained a lot of weight. Search for PROFANITIES to get to the beginning."));
					}
					else
					{
						click.setResponse(LIT("Failed to find profanity data."));
					}
				});
				experiments->createChild<CommandExportDisplayNames>();
				experiments->createChild<CommandLambdaActionScript>(LIT("Abort Transition"), CMDNAMES("aborttransition", "abortransition"), NOLABEL, [](const Click& click)
				{
					TransitionHelper::abortTransition();
				});
				experiments->createChild<CommandLambdaActionScript>(LIT("Quick Bail"), CMDNAMES("quickbail"), NOLABEL, [](const Click& click)
				{
					// made for 1.58 The Contract
					if (NETWORK::NETWORK_IS_IN_TRANSITION())
					{
						NETWORK::NETWORK_BAIL_TRANSITION(0, 0, 0);
					}
					NETWORK::NETWORK_HOST_TRANSITION(0, 1, 200, 13, 0, 0, 0, 0, 0, 0);
					while (NETWORK::NETWORK_IS_TRANSITION_BUSY())
					{
						Script::current()->yield();
					}
					NETWORK::NETWORK_DO_TRANSITION_TO_NEW_FREEMODE(ScriptGlobal(2715542 + 1).as<Any*>(), ScriptGlobal(2715542 + 1 + 834).get<Any>(), 32, TRUE, TRUE, FALSE);
					while (NETWORK::NETWORK_IS_TRANSITION_BUSY())
					{
						Script::current()->yield();
					}
					NETWORK::NETWORK_LAUNCH_TRANSITION();
				});
				experiments->createChild<CommandGallery>();
			}
		}

		// Credits
		{
			auto credits = this->createChild<CommandList>(LOC("CRED"), { CMDNAME("credits") });

			credits->createChild<CommandReadonlyLink>(LIT("Pocakking"), "https://github.com/Pocakking/BigBaseV2", LOC("CRED_Pocakking"));
			credits->createChild<CommandReadonlyName>(LIT("QuickNET"), LOC("CRED_QuickNET"));
			credits->createChild<CommandReadonlyName>(LIT("Maestro-1337"), LOC("CRED_UPD"));
			credits->createChild<CommandReadonlyLink>(LIT("alloc8or"), "https://alloc8or.re/gta5/nativedb/", LOC("CRED_alloc8or"));
			credits->createChild<CommandReadonlyLink>(LIT("SirMestre"), "https://www.unknowncheats.me/forum/grand-theft-auto-v/246757-sirmestre-littleinjector-v0-1-a.html", LOC("CRED_SirMestre"));
			credits->createChild<CommandReadonlyLink>(LIT("Give-Two"), "https://github.com/Give-Two/ScriptHookV", LOC("CRED_Give-Two"));
			credits->createChild<CommandReadonlyLink>(LIT("gir489"), "https://bitbucket.org/gir489/bigbasev2-fix", LOC("CRED_gir489"));
			credits->createChild<CommandReadonlyLink>(LIT("well-in-that-case"), "https://github.com/well-in-that-case/Pluto", LOC("CRED_Ryan"));
			credits->createChild<CommandReadonlyName>(LIT("C5Hackr"), LOC("CRED_BE"));
			credits->createChild<CommandReadonlyLink>(LIT("UPX"), "https://github.com/upx/upx", LOC("CRED_UPX"));
			credits->createChild<CommandReadonlyLink>(LIT("UnknownCheats"), "https://www.unknowncheats.me/forum/grand-theft-auto-v/", LOC("CRED_UnknownCheats"));
			credits->createChild<CommandReadonlyLink>(LIT("StackOverflow"), "https://stackoverflow.com/", LOC("CRED_StackOverflow"));

			// Translators
			credits->createChild<CommandDivider>(LOC("CRED_LANG"));

			credits->createChild<CommandReadonlyName>(LIT("Thimo"), LOC("CRED_Thimo"));
			credits->createChild<CommandReadonlyName>(LIT("moue"), LOC("CRED_moue"));
			//credits->createChild <--- wants to fuck aeronyx, LOC("CRED_aeronyx"));
			credits->createChild<CommandReadonlyName>(LIT("zzzz"), LOC("CRED_zzzz"));
			credits->createChild<CommandReadonlyName>(LIT("IceDoomfist"), LOC("CRED_IceDoomfist"));
			credits->createChild<CommandReadonlyName>(LIT("99Anvar99"), LOC("CRED_99Anvar99"));
			credits->createChild<CommandReadonlyName>(LIT("Lancito01"), LOC("CRED_Lancito01"));
			credits->createChild<CommandReadonlyName>(LIT("Itreax"), LOC("CRED_Itreax"));
			credits->createChild<CommandReadonlyName>(LIT("Emre"), LOC("CRED_Emre"));
			credits->createChild<CommandReadonlyName>(LIT("DumbBird"), LOC("CRED_DumbBird"));
			credits->createChild<CommandReadonlyName>(LIT("Rem1ria"), LOC("CRED_JA"));
			credits->createChild<CommandReadonlyName>(LIT("Nhất Linh"), LOC("CRED_VI"));
			credits->createChild<CommandReadonlyName>(LIT("Il Mac"), LOC("CRED_IT"));

			// Miscellaneous
			credits->createChild<CommandDivider>(LOC("MISC"));
			credits->createChild<CommandDivider>(LOC("The Milk Man")), ("Really funny guy, menu wouldn't have been the same without him"));
			credits->createChild<CommandReadonlyName>(LOC("CRED_YOU"), LOC("CRED_YOU_H"));
		}

		this->createChild<CommandSearchMenu>();
		this->createChild<CommandDefault>();
		this->createChild<CommandListNonDefaults>();
		this->createChild<CommandReadonlyLink>(LOC("HELP"), soup::ObfusString("https://stand.sh/help/"));
		this->createChild<CommandListStarred>();
		this->createChild<CommandWeb>();
		this->createChild<CommandConsole>();
		this->createChild<CommandLambdaAction>(LOC("OPNSTND"), { CMDNAME("openstandfolder") }, LOC("OPNSTND_H"), [](Click& click)
		{
			g_gui.shellExecute(std::wstring(_wgetenv(L"appdata")).append(LR"(\Stand\)").c_str());
		});
		this->createChild<CommandLambdaAction>(LOC("CLRNOTIFS"), { CMDNAME("clearstandnotifys") }, LOC("CLRNOTIFS_H"), [](Click& click)
		{
			click.setNoResponse();
			g_notify_grid.clear();
		});
		this->createChild<CommandLambdaAction>(LOC("EMPTYLOG"), { CMDNAME("emptylog"), CMDNAME("clearlog") }, LOC("EMPTYLOG_H"), [](Click& click)
		{
			g_logger.empty();
			click.setResponse(LOC("EMPTYLOG_T"));
		});
		if (g_gui.root_state != GUI_FREEONLINE)
		{
			this->createChild<CommandFeatureList>();
		}
		this->createChild<CommandListTutorial>();
		this->createChild<CommandUnload>();
	}

	void rootCheckThread()
	{
		g_gui.root_check_in_progress = true;
		__try
		{
			std::unordered_map<CommandName, std::string> command_names_map = {};
			g_gui.performRootCheck(g_gui.root_list.get(), command_names_map);
		}
		__EXCEPTIONAL()
		{
		}
		g_gui.root_check_in_progress = false;
	}

	void CommandTabStand::onKonamiCodeEntered()
	{
		if (secret == nullptr)
		{
			secret = this->createChild<CommandList>(LIT_OBF("Super Secret Shit"), CMDNAMES(), NOLABEL, CMDFLAGS_LIST | CMDFLAG_TEMPORARY | CMDFLAG_FEATURELIST_SKIP);

			secret->createChild<CommandListMillion>();
			secret->createChild<CommandRabbitHole>();

			// Auth
			{
				auto* auth = secret->createChild<CommandList>(LIT_OBF("Auth"));

				auth->createChild<CommandLambdaAction>(LIT_OBF("Log Out"), CMDNAMES(), NOLABEL, &Auth::logOutManual, CMDFLAGS_LIST | CMDFLAG_TEMPORARY);
				/*auth->createChild<CommandLambdaAction>(LIT("Switch To Basic Edition"), CMDNAMES(), NOLABEL, [](Click& click)
				{
					g_relay.sendLineAsync("as reqelv 1");
				}, COMMANDFLAG_TEMPORARY);
				auth->createChild<CommandLambdaAction>(LIT("Switch To Regular Edition"), CMDNAMES(), NOLABEL, [](Click& click)
				{
					g_relay.sendLineAsync("as reqelv 2");
				}, COMMANDFLAG_TEMPORARY);
				auth->createChild<CommandLambdaAction>(LIT("Switch To Ultimate Edition"), CMDNAMES(), NOLABEL, [](Click& click)
				{
					g_relay.sendLineAsync("as reqelv 3");
				}, COMMANDFLAG_TEMPORARY);*/
				auth->createChild<CommandLambdaAction>(LIT_OBF("Discover Activation Key + Log In"), CMDNAMES(), NOLABEL, [](Click& click)
				{
					if (g_auth.discoverActivationKey())
					{
						g_auth.enableNotifications();
						g_auth.tryActivationKey();
						click.setResponse(LOC("ACTVTE_STRT2"));
					}
				}, CMDFLAGS_ACTION | CMDFLAG_TEMPORARY);
			}

			secret->createChild<CommandLambdaAction>(LIT_OBF("Perform Commands Check"), CMDNAMES(), LIT_OBF("Writes to your log."), [](Click& click)
			{
				Exceptional::createManagedExceptionalThread(__FUNCTION__, &rootCheckThread);
			}, CMDFLAGS_ACTION | CMDFLAG_TEMPORARY);
			secret->createChild<CommandSelfChatCommandsFriendsPerms>();
			secret->createChild<CommandNoExtraClear>();
			secret->createChild<CommandTogglePointer>(&Util::unit_of_choice_is_mps, LIT_OBF("Speedometer Uses Metres Per Second"), CMDNAMES(), NOLABEL, CMDFLAGS_TOGGLE | CMDFLAG_TEMPORARY);
			secret->createChild<CommandTogglePointer>(&g_gui.command_box_enabled, LIT_OBF("Command Box Enabled"), CMDNAMES(), NOLABEL, CMDFLAGS_TOGGLE | CMDFLAG_TEMPORARY);
			//secret->createChild<CommandBanBypass>();

			this->updateWebState();
		}
		Click click(CLICK_AUTO, TC_OTHER);
		secret->onClick(click);
	}
}
