<?php
/**
 *  Embed.php
 *
 *  @author     {$author}
 *  @package    Pastit
 *  @version    $Id: 3746a141b08f7277ff5d5367023b2f4f12139878 $
 */

/**
 *  embed view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Pastit
 */
class Pastit_View_Embed extends Pastit_ViewClass
{
    /** @var boolean  layout template use flag   */
    public $use_layout = false;

    /**
     *  preprocess before forwarding.
     *
     *  @access public
     */
    public function preforward()
    {
        $this->has_default_header = false;
        //$this->header(array(
        //    'Content-Type' => 'text/javascript;charset=utf-8',
        //));

        $pm = $this->backend->getManager('paste');
        $um = $this->backend->getManager('user');
        $paste = $pm->getPaste($this->af->get('id'));

        if (empty($paste)) {
            self::error(404);
            return;
        }

        list($content, $type) = $pm->getSyntaxHighlightedContent($paste['content'], $paste['content_type']);
        $paste['content_type'] = $type;
        $this->af->setApp('paste', $paste);
        $this->af->setAppNe('content', $content);
    }
}

