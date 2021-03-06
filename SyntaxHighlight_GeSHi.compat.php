<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

/**
 * Stub class for maintaining backward-compatibility with extensions
 * that have not been updated for version 2.0 of SyntaxHighlight_GeSHi.
 */
class GeSHi {
	public function __construct( $html ) {
		$this->html = $html;
	}

	public function error() {
	}

	public function set_language( $language ) {
	}

	public function parse_code() {
		global $wgOut;
		$wgOut->addModuleStyles( 'ext.pygments' );
		return $this->html;
	}
}

class SyntaxHighlightGeSHiCompat {
	/** @var array A mapping of GeSHi lexer names to compatible Pygments lexers. */
	private static $compatibleLexers = array(
		// Assembler
		'arm'       => 'asm',
		'6502acme'  => 'asm',
		'6502tasm'  => 'asm',
		'6502kickass'=> 'asm',
		'68000devpac'=> 'asm',
		'dcpu16'    => 'asm',
		'm68k'      => 'asm',
		'mmix'      => 'nasm',
		'mpasm'     => 'asm',
		'pic16'     => 'asm',
		'z80'       => 'asm',

		// BASIC
		'xbasic'    => 'basic',
		'thinbasic' => 'basic',
		'sdlbasic'  => 'basic',
		'purebasic' => 'basic',
		'mapbasic'  => 'basic',
		'locobasic' => 'basic',
		'gwbasic'   => 'basic',
		'freebasic' => 'basic',
		'basic4gl'  => 'basic',
		'zxbasic'   => 'basic',
		'gambas'    => 'basic',
		'oobas'     => 'basic',
		'bascomavr' => 'basic',

		// C / C++
		'c_loadrunner' => 'c',
		'c_mac'        => 'c',
		'c_winapi'     => 'c',
		'upc'          => 'c',
		'cpp-qt'       => 'cpp',
		'cpp-winapi'   => 'cpp',
		'urbi'         => 'cpp',

		// HTML
		'html4strict' => 'html',
		'html5'       => 'html',

		// JavaScript
		'jquery'     => 'javascript',
		'ecmascript' => 'javascript',

		// Microsoft
		'vb'           => 'vbnet',
		'asp'          => 'aspx-vb',
		'visualfoxpro' => 'foxpro',
		'dos'          => 'bat',
		'visualprolog' => 'prolog',
		'reg'          => 'registry',

		// Miscellaneous
		'cadlisp'   => 'lisp',
		'java5'     => 'java',
		'php-brief' => 'php',
		'povray'    => 'pov',
		'pys60'     => 'python',
		'rails'     => 'ruby',
		'rpmspec'   => 'spec',
		'rsplus'    => 'splus',
		'gettext'   => 'pot',

		// ML
		'ocaml-brief' => 'ocaml',
		'standardml'  => 'sml',

		// Modula 2
		'modula3' => 'modula2',
		'oberon2' => 'modula2',

		// SQL
		'dcl'      => 'sql',
		'tsql'     => 'sql',
		'plsql'    => 'sql',
		'oracle11' => 'sql',
		'oracle8'  => 'sql',

		// REXX
		'oorexx'  => 'rexx',
		'netrexx' => 'rexx',

		// xpp is basically Java
		'xpp' => 'java',

		// bibtex is basically LaTeX
		'bibtex' => 'latex',

		// 'emacs-lisp' was an alias for the Emacs Lisp lexer.
		// It got dropped in Pygments commit 811926b, probably by accident.
		// Declare it here until it is restored upstream.
		// Upstream bug:
		//   https://bitbucket.org/birkenfeld/pygments-main/issues/1207
		'emacs-lisp' => 'elisp',

		// apt
		'apt_sources' => 'debsources',
	);

	public static function getGeSHiToPygmentsMap() {
		return self::$compatibleLexers;
	}
}
