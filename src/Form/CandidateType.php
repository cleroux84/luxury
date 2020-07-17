<?php

namespace App\Form;

use App\Entity\Candidate;
use App\Entity\JobCategory;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('password')
            /* ->add('password_confirm') */
            ->add('isVerified')
            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'Male' => true,
                    'Female' => true,
                    'Transgender' => true,
            ],        
            ])
            ->add('first_name')
            ->add('last_name')
            ->add('address')
            ->add('country')
            ->add('nationality')
            ->add('passport')
            ->add('passport_file', FileType::class, [
                'label' => 'Passport (PDF file)',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
            ])
            ->add('cv_file', FileType::class, [
                'label' => 'CV (PDF file)',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
            ])
            ->add('profil_picture', FileType::class, [
                'label' => 'Picture (PDF file)',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                // make it optional so you don't have to re-upload the PDF file
                // every time you edit the Product details
                'required' => false,

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
            ])

            ->add('current_location')
            ->add('date_birth', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('place_birth')
            ->add('availability')
            ->add('job_category', EntityType::class, [
                'class' => JobCategory::class,
                'choice_label'=>'category', 
                'placeholder'=>'Choose your job sector'
            ])
            ->add('experience', ChoiceType::class, [
                'choices' => [
                    '0 - 6 months' => true,
                    '6 months - 1 year ' => true,
                    '1 - 2 years' => true,
                    '2+ years' => true,
                    '5+ years' => true,
                    '10+ yeards' => true,
            ],        
            ])
            ->add('short_description', TextareaType::class)
            ->add('notes_candidate')
             ->add('created_at', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('updated_at', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('deleted_at', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
            ]) 
            ->add('files')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }
}
