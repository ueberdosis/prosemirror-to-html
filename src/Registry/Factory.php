<?php

declare(strict_types = 1);

namespace ProseMirrorToHtml\Registry;


use ProseMirrorToHtml\Renderers\Marks\Code;
use ProseMirrorToHtml\Renderers\Marks\Italic;
use ProseMirrorToHtml\Renderers\Marks\Link;
use ProseMirrorToHtml\Renderers\Marks\Strike;
use ProseMirrorToHtml\Renderers\Marks\Subscript;
use ProseMirrorToHtml\Renderers\Marks\Superscript;
use ProseMirrorToHtml\Renderers\Marks\Underline;
use ProseMirrorToHtml\Renderers\Nodes\BulletList;
use ProseMirrorToHtml\Renderers\Marks\Bold;
use ProseMirrorToHtml\Renderers\Nodes\Blockquote;
use ProseMirrorToHtml\Renderers\Nodes\CodeBlock;
use ProseMirrorToHtml\Renderers\Nodes\HardBreak;
use ProseMirrorToHtml\Renderers\Nodes\Heading;
use ProseMirrorToHtml\Renderers\Nodes\Image;
use ProseMirrorToHtml\Renderers\Nodes\ListItem;
use ProseMirrorToHtml\Renderers\Nodes\OrderedList;
use ProseMirrorToHtml\Renderers\Nodes\Paragraph;
use ProseMirrorToHtml\Renderers\Nodes\Table;
use ProseMirrorToHtml\Renderers\Nodes\TableCell;
use ProseMirrorToHtml\Renderers\Nodes\TableHeader;
use ProseMirrorToHtml\Renderers\Nodes\TableRow;
use ProseMirrorToHtml\Renderers\Nodes\Text;

class Factory
{
    /**
     * @return RendererRegistry
     */
    public static function buildMarksRegistry()
    {
        return new RendererRegistry([
            new Bold(),
            new Code(),
            new Italic(),
            new Link(),
            new Strike(),
            new Subscript(),
            new Superscript(),
            new Underline(),
        ]);
    }

    /**
     * @return RendererRegistry
     */
    public static function buildNodesRegistry()
    {
        return new RendererRegistry([
            new Blockquote(),
            new BulletList(),
            new CodeBlock(),
            new HardBreak(),
            new Heading(),
            new Image(),
            new ListItem(),
            new OrderedList(),
            new Paragraph(),
            new Table(),
            new TableCell(),
            new TableHeader(),
            new TableRow(),
            new Text(),
        ]);
    }
}