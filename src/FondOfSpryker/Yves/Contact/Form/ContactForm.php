<?php
namespace FondOfSpryker\Yves\Contact\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * @author mnoerenberg
 */
class ContactForm extends AbstractType
{
    const FIELD_NAME = 'name';
    const FIELD_MAIL = 'mail';
    const FIELD_PHONE = 'phone';
    const FIELD_COMMENT = 'comment';

    /**
     * @return string
     */
    public function getName()
    {
        return 'contactForm';
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addNameField($builder);
        $this->addMailField($builder);
        $this->addPhoneField($builder);
        $this->addCommentField($builder);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return void
     */
    protected function addNameField(FormBuilderInterface $builder)
    {
        $builder->add(self::FIELD_NAME, TextType::class, [
            'label' => 'Name',
            'required' => true
        ]);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return void
     */
    protected function addMailField(FormBuilderInterface $builder)
    {
        $builder->add(self::FIELD_MAIL, EmailType::class, [
            'label' => 'Mail',
            'required' => true,
            'constraints' => [
                new NotBlank(),
                new Email(),
            ]
        ]);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return void
     */
    protected function addPhoneField(FormBuilderInterface $builder)
    {
        $builder->add(self::FIELD_PHONE, TextType::class, [
            'label' => 'Phone',
            'required' => false
        ]);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return void
     */
    protected function addCommentField(FormBuilderInterface $builder)
    {
        $builder->add(self::FIELD_COMMENT, TextareaType::class, [
            'label' => 'Comment',
            'required' => true
        ]);
    }
}
