<?php

namespace App\Http\Requests\Concerns;

use Illuminate\Http\Response;
use Midnite81\Xml2Array\Exceptions\IncorrectFormatException;
use Midnite81\Xml2Array\Xml2Array;
use Symfony\Component\HttpFoundation\ParameterBag;

trait HasXmlContentType
{
    protected $xmlSource;

    protected function getInputSource()
    {
        if ($this->xmlSource === null) {
            $this->xmlSource = new ParameterBag(
                $this->nullEmptyArrays($this->xmlParameters())
            );
        }

        return $this->xmlSource;
    }

    protected function xmlParameters()
    {
        try {
            return Xml2Array::create($this->getContent())->toArray();
        } catch (IncorrectFormatException $e) {
            abort(Response::HTTP_UNSUPPORTED_MEDIA_TYPE, 'Expected Content-Type: application/xml.');
        } catch (\ErrorException $e) {
            return [];
        }
    }

    protected function nullEmptyArrays(array $arr)
    {
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                if (empty($value)) {
                    $arr[$key] = null;
                } else {
                    $arr[$key] = $this->nullEmptyArrays($value);
                }
            }
        }

        return $arr;
    }

    abstract public function getContent($asResource = false);
}