<?php

declare(strict_types=1);

namespace Deviantintegral\Har;

use Deviantintegral\Har\SharedFields\CommentTrait;
use Deviantintegral\Har\SharedFields\StartedDateTimeTrait;
use JMS\Serializer\Annotation as Serializer;

final class Page
{
    use CommentTrait;
    use StartedDateTimeTrait;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $title;

    /**
     * @var \Deviantintegral\Har\PageTimings
     * @Serializer\Type("Deviantintegral\Har\PageTimings")
     */
    private $pageTimings;

    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return Page
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return Page
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return \Deviantintegral\Har\PageTimings
     */
    public function getPageTimings(): PageTimings
    {
        return $this->pageTimings;
    }

    /**
     * @param \Deviantintegral\Har\PageTimings $pageTimings
     *
     * @return Page
     */
    public function setPageTimings(PageTimings $pageTimings): self
    {
        $this->pageTimings = $pageTimings;

        return $this;
    }
}
