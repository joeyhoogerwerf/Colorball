﻿package{		import flash.display.Sprite;	import flash.text.TextField;	import flash.text.TextFormat;	import flash.system.System;	import flash.text.Font;		public class Star extends Sprite{				private var _newStarTF:TextField = new TextField();		private var _newTextFormat:TextFormat = new TextFormat();		private var _newFont:Font = new ColorballFont();		private var _newBlurFilter:Blurfilter = new Blurfilter(2, 2, 1, this);		public function Star(stageWidth:int, color:uint){						displayTF(stageWidth, color);		}				private function displayTF(stageWidth:int, color:uint):void{						//MEMORY CHECK			var mem:String = Number( System.totalMemory / 1024 / 1024 ).toFixed( 2 ) + "Mb";						_newTextFormat.color = color;			_newTextFormat.size = 24;			_newTextFormat.font = this._newFont.fontName;			_newTextFormat.align = "right";			_newStarTF.defaultTextFormat = _newTextFormat;			_newStarTF.embedFonts = true;						_newStarTF.width = stageWidth - 25;			_newStarTF.y = 25;						_newStarTF.text = "* # $";// + mem;						addChild(this._newStarTF);		}				public function refreshCounter():void		{			//MEMORY CHECK			//var mem:String = Number( System.totalMemory / 1024 / 1024 ).toFixed( 2 ) + "Mb";			//_newStarTF.text = "* " + mem;		}	}}