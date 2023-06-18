import React, {useEffect, useRef} from 'react'
import {useAnimations, useFBX, useGLTF} from '@react-three/drei'
import {useControls} from "leva";

export function Avatar(props) {
    const {animation} = props;

    const {wireframe} = useControls({
        wireframe: false,
    });

    const { nodes, materials } = useGLTF('models/648f596df2caada08670b0f2.glb')
    const group = useRef();

    const {animations: typingAnimation} = useFBX('animations/Typing.fbx');
    const {animations: layingAnimation} = useFBX('animations/Laying.fbx');

    typingAnimation[0].name = 'Typing';
    layingAnimation[0].name = 'Laying';

     const { actions } = useAnimations([typingAnimation[0],layingAnimation[0]], group);

    useEffect(() => {
        actions[animation].reset().fadeIn(0.5).play();
        return () => actions[animation].reset().fadeOut(0.5);
    } , [animation]);

    useEffect(() => {
        Object.values(materials).forEach((material) => {
            material.metalness = 0;
            material.roughness = 1;
            material.wireframe = wireframe;
        });
    } , [wireframe]);



    return (
        <group {...props} ref={group} dispose={null}>
            <primitive object={nodes.Hips} />
            <skinnedMesh geometry={nodes.Wolf3D_Body.geometry} material={materials.Wolf3D_Body} skeleton={nodes.Wolf3D_Body.skeleton} />
            <skinnedMesh geometry={nodes.Wolf3D_Outfit_Bottom.geometry} material={materials.Wolf3D_Outfit_Bottom} skeleton={nodes.Wolf3D_Outfit_Bottom.skeleton} />
            <skinnedMesh geometry={nodes.Wolf3D_Outfit_Footwear.geometry} material={materials.Wolf3D_Outfit_Footwear} skeleton={nodes.Wolf3D_Outfit_Footwear.skeleton} />
            <skinnedMesh geometry={nodes.Wolf3D_Outfit_Top.geometry} material={materials.Wolf3D_Outfit_Top} skeleton={nodes.Wolf3D_Outfit_Top.skeleton} />
            <skinnedMesh geometry={nodes.Wolf3D_Hair.geometry} material={materials.Wolf3D_Hair} skeleton={nodes.Wolf3D_Hair.skeleton} />
            <skinnedMesh name="EyeLeft" geometry={nodes.EyeLeft.geometry} material={materials.Wolf3D_Eye} skeleton={nodes.EyeLeft.skeleton} morphTargetDictionary={nodes.EyeLeft.morphTargetDictionary} morphTargetInfluences={nodes.EyeLeft.morphTargetInfluences} />
            <skinnedMesh name="EyeRight" geometry={nodes.EyeRight.geometry} material={materials.Wolf3D_Eye} skeleton={nodes.EyeRight.skeleton} morphTargetDictionary={nodes.EyeRight.morphTargetDictionary} morphTargetInfluences={nodes.EyeRight.morphTargetInfluences} />
            <skinnedMesh name="Wolf3D_Head" geometry={nodes.Wolf3D_Head.geometry} material={materials.Wolf3D_Skin} skeleton={nodes.Wolf3D_Head.skeleton} morphTargetDictionary={nodes.Wolf3D_Head.morphTargetDictionary} morphTargetInfluences={nodes.Wolf3D_Head.morphTargetInfluences} />
            <skinnedMesh name="Wolf3D_Teeth" geometry={nodes.Wolf3D_Teeth.geometry} material={materials.Wolf3D_Teeth} skeleton={nodes.Wolf3D_Teeth.skeleton} morphTargetDictionary={nodes.Wolf3D_Teeth.morphTargetDictionary} morphTargetInfluences={nodes.Wolf3D_Teeth.morphTargetInfluences} />
        </group>
    )
}

useGLTF.preload('models/648f596df2caada08670b0f2.glb')
