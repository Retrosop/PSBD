PGDMP  8            
        |            Jurnal    16.4    16.4 >    ,           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            -           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            .           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            /           1262    24577    Jurnal    DATABASE     |   CREATE DATABASE "Jurnal" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Russian_Russia.1251';
    DROP DATABASE "Jurnal";
                postgres    false            �            1259    24657 
   attendance    TABLE     �   CREATE TABLE public.attendance (
    id integer NOT NULL,
    student_id integer,
    lesson_id integer,
    status boolean NOT NULL,
    comment character varying(255)
);
    DROP TABLE public.attendance;
       public         heap    postgres    false            �            1259    24656    attendance_id_seq    SEQUENCE     �   CREATE SEQUENCE public.attendance_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.attendance_id_seq;
       public          postgres    false    228            0           0    0    attendance_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.attendance_id_seq OWNED BY public.attendance.id;
          public          postgres    false    227            �            1259    24579 
   department    TABLE     f   CREATE TABLE public.department (
    id integer NOT NULL,
    name character varying(255) NOT NULL
);
    DROP TABLE public.department;
       public         heap    postgres    false            �            1259    24578    department_id_seq    SEQUENCE     �   CREATE SEQUENCE public.department_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.department_id_seq;
       public          postgres    false    216            1           0    0    department_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.department_id_seq OWNED BY public.department.id;
          public          postgres    false    215            �            1259    24622 
   discipline    TABLE     �   CREATE TABLE public.discipline (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    department_id integer
);
    DROP TABLE public.discipline;
       public         heap    postgres    false            �            1259    24621    discipline_id_seq    SEQUENCE     �   CREATE SEQUENCE public.discipline_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.discipline_id_seq;
       public          postgres    false    224            2           0    0    discipline_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.discipline_id_seq OWNED BY public.discipline.id;
          public          postgres    false    223            �            1259    24634    lesson    TABLE     �  CREATE TABLE public.lesson (
    id integer NOT NULL,
    discipline_id integer,
    teacher_id integer,
    group_id integer,
    lesson_type character varying(50) NOT NULL,
    lesson_date date NOT NULL,
    CONSTRAINT lesson_lesson_type_check CHECK (((lesson_type)::text = ANY ((ARRAY['Лекция'::character varying, 'Лабораторная работа'::character varying])::text[])))
);
    DROP TABLE public.lesson;
       public         heap    postgres    false            �            1259    24633    lesson_id_seq    SEQUENCE     �   CREATE SEQUENCE public.lesson_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.lesson_id_seq;
       public          postgres    false    226            3           0    0    lesson_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.lesson_id_seq OWNED BY public.lesson.id;
          public          postgres    false    225            �            1259    24598    student    TABLE     ~   CREATE TABLE public.student (
    id integer NOT NULL,
    full_name character varying(255) NOT NULL,
    group_id integer
);
    DROP TABLE public.student;
       public         heap    postgres    false            �            1259    24597    student_id_seq    SEQUENCE     �   CREATE SEQUENCE public.student_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.student_id_seq;
       public          postgres    false    220            4           0    0    student_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.student_id_seq OWNED BY public.student.id;
          public          postgres    false    219            �            1259    24586    studentgroup    TABLE     �   CREATE TABLE public.studentgroup (
    id integer NOT NULL,
    name character varying(50) NOT NULL,
    department_id integer
);
     DROP TABLE public.studentgroup;
       public         heap    postgres    false            �            1259    24585    studentgroup_id_seq    SEQUENCE     �   CREATE SEQUENCE public.studentgroup_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.studentgroup_id_seq;
       public          postgres    false    218            5           0    0    studentgroup_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.studentgroup_id_seq OWNED BY public.studentgroup.id;
          public          postgres    false    217            �            1259    24610    teacher    TABLE     �   CREATE TABLE public.teacher (
    id integer NOT NULL,
    full_name character varying(255) NOT NULL,
    department_id integer
);
    DROP TABLE public.teacher;
       public         heap    postgres    false            �            1259    24609    teacher_id_seq    SEQUENCE     �   CREATE SEQUENCE public.teacher_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.teacher_id_seq;
       public          postgres    false    222            6           0    0    teacher_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.teacher_id_seq OWNED BY public.teacher.id;
          public          postgres    false    221            t           2604    24837    attendance id    DEFAULT     n   ALTER TABLE ONLY public.attendance ALTER COLUMN id SET DEFAULT nextval('public.attendance_id_seq'::regclass);
 <   ALTER TABLE public.attendance ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    227    228            n           2604    24838    department id    DEFAULT     n   ALTER TABLE ONLY public.department ALTER COLUMN id SET DEFAULT nextval('public.department_id_seq'::regclass);
 <   ALTER TABLE public.department ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    215    216            r           2604    24839    discipline id    DEFAULT     n   ALTER TABLE ONLY public.discipline ALTER COLUMN id SET DEFAULT nextval('public.discipline_id_seq'::regclass);
 <   ALTER TABLE public.discipline ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    224    223    224            s           2604    24840 	   lesson id    DEFAULT     f   ALTER TABLE ONLY public.lesson ALTER COLUMN id SET DEFAULT nextval('public.lesson_id_seq'::regclass);
 8   ALTER TABLE public.lesson ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    226    226            p           2604    24841 
   student id    DEFAULT     h   ALTER TABLE ONLY public.student ALTER COLUMN id SET DEFAULT nextval('public.student_id_seq'::regclass);
 9   ALTER TABLE public.student ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    219    220    220            o           2604    24842    studentgroup id    DEFAULT     r   ALTER TABLE ONLY public.studentgroup ALTER COLUMN id SET DEFAULT nextval('public.studentgroup_id_seq'::regclass);
 >   ALTER TABLE public.studentgroup ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    218    218            q           2604    24843 
   teacher id    DEFAULT     h   ALTER TABLE ONLY public.teacher ALTER COLUMN id SET DEFAULT nextval('public.teacher_id_seq'::regclass);
 9   ALTER TABLE public.teacher ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    221    222    222            )          0    24657 
   attendance 
   TABLE DATA           P   COPY public.attendance (id, student_id, lesson_id, status, comment) FROM stdin;
    public          postgres    false    228   �F                 0    24579 
   department 
   TABLE DATA           .   COPY public.department (id, name) FROM stdin;
    public          postgres    false    216   3G       %          0    24622 
   discipline 
   TABLE DATA           =   COPY public.discipline (id, name, department_id) FROM stdin;
    public          postgres    false    224   �G       '          0    24634    lesson 
   TABLE DATA           c   COPY public.lesson (id, discipline_id, teacher_id, group_id, lesson_type, lesson_date) FROM stdin;
    public          postgres    false    226   9H       !          0    24598    student 
   TABLE DATA           :   COPY public.student (id, full_name, group_id) FROM stdin;
    public          postgres    false    220   �H                 0    24586    studentgroup 
   TABLE DATA           ?   COPY public.studentgroup (id, name, department_id) FROM stdin;
    public          postgres    false    218   `I       #          0    24610    teacher 
   TABLE DATA           ?   COPY public.teacher (id, full_name, department_id) FROM stdin;
    public          postgres    false    222   �I       7           0    0    attendance_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.attendance_id_seq', 5, true);
          public          postgres    false    227            8           0    0    department_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.department_id_seq', 5, true);
          public          postgres    false    215            9           0    0    discipline_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.discipline_id_seq', 5, true);
          public          postgres    false    223            :           0    0    lesson_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.lesson_id_seq', 5, true);
          public          postgres    false    225            ;           0    0    student_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.student_id_seq', 5, true);
          public          postgres    false    219            <           0    0    studentgroup_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.studentgroup_id_seq', 5, true);
          public          postgres    false    217            =           0    0    teacher_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.teacher_id_seq', 5, true);
          public          postgres    false    221            �           2606    24662    attendance attendance_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.attendance
    ADD CONSTRAINT attendance_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.attendance DROP CONSTRAINT attendance_pkey;
       public            postgres    false    228            w           2606    24584    department department_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.department
    ADD CONSTRAINT department_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.department DROP CONSTRAINT department_pkey;
       public            postgres    false    216                       2606    24627    discipline discipline_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.discipline
    ADD CONSTRAINT discipline_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.discipline DROP CONSTRAINT discipline_pkey;
       public            postgres    false    224            �           2606    24640    lesson lesson_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.lesson
    ADD CONSTRAINT lesson_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.lesson DROP CONSTRAINT lesson_pkey;
       public            postgres    false    226            {           2606    24603    student student_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.student
    ADD CONSTRAINT student_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.student DROP CONSTRAINT student_pkey;
       public            postgres    false    220            y           2606    24591    studentgroup studentgroup_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.studentgroup
    ADD CONSTRAINT studentgroup_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.studentgroup DROP CONSTRAINT studentgroup_pkey;
       public            postgres    false    218            }           2606    24615    teacher teacher_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.teacher
    ADD CONSTRAINT teacher_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.teacher DROP CONSTRAINT teacher_pkey;
       public            postgres    false    222            �           2606    24668 $   attendance attendance_lesson_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.attendance
    ADD CONSTRAINT attendance_lesson_id_fkey FOREIGN KEY (lesson_id) REFERENCES public.lesson(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.attendance DROP CONSTRAINT attendance_lesson_id_fkey;
       public          postgres    false    226    228    4737            �           2606    24663 %   attendance attendance_student_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.attendance
    ADD CONSTRAINT attendance_student_id_fkey FOREIGN KEY (student_id) REFERENCES public.student(id) ON DELETE CASCADE;
 O   ALTER TABLE ONLY public.attendance DROP CONSTRAINT attendance_student_id_fkey;
       public          postgres    false    220    228    4731            �           2606    24628 (   discipline discipline_department_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.discipline
    ADD CONSTRAINT discipline_department_id_fkey FOREIGN KEY (department_id) REFERENCES public.department(id) ON DELETE SET NULL;
 R   ALTER TABLE ONLY public.discipline DROP CONSTRAINT discipline_department_id_fkey;
       public          postgres    false    4727    224    216            �           2606    24641     lesson lesson_discipline_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.lesson
    ADD CONSTRAINT lesson_discipline_id_fkey FOREIGN KEY (discipline_id) REFERENCES public.discipline(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.lesson DROP CONSTRAINT lesson_discipline_id_fkey;
       public          postgres    false    224    4735    226            �           2606    24651    lesson lesson_group_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.lesson
    ADD CONSTRAINT lesson_group_id_fkey FOREIGN KEY (group_id) REFERENCES public.studentgroup(id) ON DELETE CASCADE;
 E   ALTER TABLE ONLY public.lesson DROP CONSTRAINT lesson_group_id_fkey;
       public          postgres    false    4729    226    218            �           2606    24646    lesson lesson_teacher_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.lesson
    ADD CONSTRAINT lesson_teacher_id_fkey FOREIGN KEY (teacher_id) REFERENCES public.teacher(id) ON DELETE CASCADE;
 G   ALTER TABLE ONLY public.lesson DROP CONSTRAINT lesson_teacher_id_fkey;
       public          postgres    false    222    4733    226            �           2606    24604    student student_group_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.student
    ADD CONSTRAINT student_group_id_fkey FOREIGN KEY (group_id) REFERENCES public.studentgroup(id) ON DELETE SET NULL;
 G   ALTER TABLE ONLY public.student DROP CONSTRAINT student_group_id_fkey;
       public          postgres    false    220    4729    218            �           2606    24592 ,   studentgroup studentgroup_department_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.studentgroup
    ADD CONSTRAINT studentgroup_department_id_fkey FOREIGN KEY (department_id) REFERENCES public.department(id) ON DELETE SET NULL;
 V   ALTER TABLE ONLY public.studentgroup DROP CONSTRAINT studentgroup_department_id_fkey;
       public          postgres    false    218    216    4727            �           2606    24616 "   teacher teacher_department_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.teacher
    ADD CONSTRAINT teacher_department_id_fkey FOREIGN KEY (department_id) REFERENCES public.department(id) ON DELETE SET NULL;
 L   ALTER TABLE ONLY public.teacher DROP CONSTRAINT teacher_department_id_fkey;
       public          postgres    false    222    4727    216            )   ^   x�3�4���/6\�q��b��& �taӅ}@���n.#N#��4��B�/l
s��2�4*«Ĕ��h�����/l��qqq ��Pd         ^   x�3�0��-�^�r����;.�r�9{�M@��;��0�Ad���2FWd*k�!�
���;�L1���wa7o������ ��p�      %   �   x�U�K
�@D�ݧ�����A\��}O34jr��Y鸑����Jp/'�H�>|�yfZ`�Ri-�ፄ��X�R��Lf%J���ab�+�/L%w/�Z"i��t��l���Di��]�V_��xP�/�`w�      '   m   x�3�4��/l���bۅ�9��Lt,u����F �6^�w���M`z/�կ  K4]؀�h�e�d�i��`c.��1�	��p�5�p��0ؔ+F��� �q]�      !   �   x�M�]
�@���S�	��xS+�k�I� ���uimi�0��Yw+%2�0_2�V8�	�w1ʍ2�	/x����$��Mт�a�k��A�eK8:�W��u\�(���^������Iκ?��W���#�M�a���j��t�c���E`�|:0�����         T   x�3�0�b�����p��rra�1���̹0(g�e�e�&��o��1PΘ�Mn)Pn��	P΄+F��� lEM      #   �   x�e���@D�v[R~�PL��@BH�h E��H�1��s���=/\�@�K<1�JGQ��npB��~���en)���m4�ʢ2�S8~�x��,�j&8���b�.V��ӆ�7���ݐi.�0J�/�l[��2��|�W_�\��%�=Su��a����DU_�]��     